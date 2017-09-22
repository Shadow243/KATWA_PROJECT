<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory as ViewFactory;

class BaseController extends Controller
{
    protected $views;

    /**
     * BaseController constructor.
     * @param ViewFactory $views
     */
    public function __construct(ViewFactory $views)
    {
//        $this->middleware('auth');
        $this->views = $views;
    }

    /**
     * return all post paginate 8 by $nbr
     * @param int $nbr
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function GetAllPost($nbr = 8)
    {
        return Post::with('comments', 'likes','authorId', 'category')->latest()->paginate($nbr);
    }

    /**
     * return Recent Posts paginate 3 by $nbr
     * @param int $nbr
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function GetRecentsPosts($nbr = 3)
    {
        return Post::with('comments', 'likes','authorId', 'category')->latest()->paginate($nbr);
    }

    public function GetOptions()
    {
        return Option::all();
    }
}
