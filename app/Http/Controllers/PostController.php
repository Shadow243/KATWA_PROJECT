<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class PostController extends BaseController
{
    public function __construct(ViewFactory $views)
    {
        parent::__construct($views);
        $this->views = $views;
    }

    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $allPosts = $this->GetAllPost(6);
        $categories = DB::table('categories')->get();
        $recentsposts = $this->GetRecentsPosts(3);
//        $recentsposts .= $recent;
//        dd($allPosts);
        $options = $this->GetOptions();
//        dd($options);
        return $this->views->make('pages.Blog.blog', compact(
            'allPosts',
            'recentsposts',
            'categories',
            'options'
        ));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Request $request)
    {
        $where = "";

        $rech = "";

        $search = preg_split('/[\s\-]/', $request->input('keyWord'));

        $count_keywords = count($search);


        foreach ($search as $key => $searches)
        {
            $rech .= " $searches";

            $where .= "title LIKE '%$searches%' OR type_pub LIKE '%$searches%' OR created_at LIKE '%$searches%' ORDER BY id ASC";

            if($key != ($count_keywords - 1))
            {
                $where .= " AND ";
            }
        }

        $this->validate($request,
            [
                'keyWord' => 'required|String|max:100'
            ]
        );
        // Sets the parameters from the get request to the variables.

        $posts = Post::query('SELECT * FROM posts WHERE '.$where)->with('comments', 'likes','authorId', 'category')->paginate(10);
        dd($posts);
        if($posts)
        {
            $infoResult = $posts->count() .str_plural(" Résultat", $posts->count())." Founded for ". $request->input('keyWord');
        }else{
            $infoResult = " Zero Résultat founded for". $request->input('keyWord');
        }

        $recentsposts = $this->GetRecentsPosts(3);
        $categories = DB::table('categories')->get();
        return $this->views->make('pages.Blog.search', compact('infoResult','posts','recentsposts','categories'));
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\View
     */
    public function showOne($slug)
    {
        $post = Post::with('comments', 'likes','authorId', 'category')->where('slug', $slug)->get();
//        dd($post);
        if(!$post)
        {
            $infoSearch = "No Post founded For ".$slug;
        }else{
            foreach ($post as $item)
            {
                $infoSearch = $item->title;
            }
        }
        $recentsPosts = $this->GetRecentsPosts();
        $categories = DB::table('categories')->get();

        return $this->views->make('pages.Blog.single-blog', compact(
            'post',
            'infoSearch',
            'recentsPosts',
            'categories'
        ));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeComment(Request $request)
    {
        $this->validate($request, [
           'CommetBody' => 'required',
           'name' => 'required|max:40',
           'id_post' => 'required'
        ]);

        $post = Post::where('id', $request->input('id_post'))->first();
        if($post)
        {
            $comment = new Comment();
            $comment->content = $request->input('CommetBody');
            $comment->name = $request->input('name');
            $comment->post_id = $request->input('id_post');
//            if(Auth::check())
//            {
//                $comment->user_id = Auth::user()->id;
//            }
            $comment = $post->comments()->save($comment);
            $newComment = Comment::with('user')->where('id', $comment->id)->first();

            return Response::json([
                'msg' => 'Commet submited successfull',
                'comment' => $newComment
            ], 200);
        }else{
            return Response::json([
                'msg' => 'Error When submited',
            ], 200);
        }

        return redirect()->back()->with('success');
    }

    /**
     * @param Comments $comment
     * @param Request $request
     * @return mixed
     */
    public function destroyComment(Comments $comment, Request $request)
    {
        $comment = Comments::where('id', $comment->id)->first();
        if ($comment){

            $this->authorize('delete', $comment);

            $comment->delete();

            return Response::json([
                'msg' => 'Commentaire supprimé',
            ], 200);
        }else
        {
            abort(404, "Ce commentaire n'existe pas");
        }
    }

    /**
     * @param $post_id
     * @return mixed
     */
    public function storeLikes($post_id)
    {
        $post = Post::with('likes')->where('id', $post_id)->first();
        if($post)
        {
            if(!Auth::user()->haslikePost($post))
            {
                $post->likes()->create(['user_id' => Auth::user()->id]);

                return Response::json([
                    'msg' => 'Like submit',
                    'post' => $post,
                    'type' => 'like'
                ], 200);
            }else
            {
                return Response::json([
                    'msg' => 'Vous avez deja aimer',
                    'post' =>  $post,
                    'type' => 'unlike'
                ], 200);
            }
        }
    }
}
