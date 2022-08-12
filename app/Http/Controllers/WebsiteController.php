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
        $recent = Post::query()->orderBy('created_at', 'desc')->with(['category', 'author'])->take(3)->get();

        return view('welcome')->with([
            'posts' => $a,
            'recent' => $recent,
        ]);
    }

    // about us function
    public function about()
    {
        return view('about');
    }

    public function single(Post $post)
    {
        $recent = Post::query()->where('id', '=', $post->id)->orderBy('created_at', 'desc')->with(['category', 'author'])->take(3)->get();
        return view('single')->with([
            'post' => $post->load(['category', 'author']),
            'recent' => $recent,
        ]);
    }

    public function youthNews(Request $request){
        $news = Post::where('blog_category_id', 1)->with('author')->paginate(10);
        return view('youthNews')->with('news', $news);
    }
}
