<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory as ViewFactory;

class ContactController extends BaseController
{
    public function __construct(ViewFactory $views)
    {
        parent::__construct($views);
        $this->views = $views;
    }

    public function ShowContact()
    {
        return $this->views->make('pages.contact');
    }
}
