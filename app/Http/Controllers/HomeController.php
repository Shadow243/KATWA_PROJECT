<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends BaseController
{
    public function __construct(ViewFactory $views)
    {
        parent::__construct($views);
        $this->views = $views;
    }

    public function ShowWelcome()
    {
//      use Illuminate\Support\Facades\DB for query buildder
//      $settings = BD::select('SELECT * FROM settings');
        $settings =  DB::table('settings')->get();
//        $posts = Post::with('user','comments','likes')->latest()->paginate(3);
        $posts = $this->GetRecentsPosts(3);
        return $this->views->make('welcome', compact('posts','settings'));
    }

    public function ShowBlog()
    {
        $allPosts = $this->GetAllPost(8);
        $categories = DB::table('categories')->get();
        $recentsposts = $this->GetRecentsPosts(3);
//        $recentsposts .= $recent;
//        dd($allPost);
        $options = $this->GetOptions();
//        dd($options);
        return $this->views->make('pages.blog', compact(
            'allPosts',
                 'recentsposts',
                    'categories',
                    'options'
        ));
    }

    public function About()
    {
        return $this->views->make('pages.About.about');
    }
}
