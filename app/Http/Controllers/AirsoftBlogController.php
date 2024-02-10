<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirsoftBlogController extends Controller
{
    public function index()
    {
        return view('airsoft-blog');
    }
}
