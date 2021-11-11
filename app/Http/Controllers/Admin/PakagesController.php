<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PakagesController extends Controller
{
    // public function index()
    // {
    //     $newsList = News::orderby('created_at', 'DESC')->get();

    //     $view = View::make('adminpanel/pages/news_index', compact('newsList'));
    //     $view->nest('sidebar','adminpanel/partials/sidebar');
    //     $view->nest('header','adminpanel/partials/header');
    //     return $view;
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view = View::make('adminpanel/pages/pakages_create');
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        return $view;
    }
}
