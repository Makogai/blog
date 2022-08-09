<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class WebsiteController extends Controller
{
    // index function
    public function index()
    {
        $a = Post::all();
        return view('welcome');
    }

    // about us function
    public function about()
    {
        return view('about');
    }
}
