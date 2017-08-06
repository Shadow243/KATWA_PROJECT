<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends BaseController
{
    public function __construct(ViewFactory $views)
    {
        parent::__construct($views);
        $this->views = $views;
    }


}
