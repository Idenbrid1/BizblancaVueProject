<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function list()
    {
        $newsletter = NewsLetter::all();
        return view('adminpanel/pages/news_letter', compact('newsletter'));
    }
}
