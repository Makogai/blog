<?php

namespace App\Http\Controllers;

use App\Mail\NewPostMail;
use App\Models\Category;
use App\Settings\GeneralSettings;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
    // index function
    public function index()
    {
        $a = Post::all();
        $recent = Post::query()->orderBy('created_at', 'desc')->with(['category', 'author'])->take(3)->get();
        $last1 = Post::query()->orderBy('created_at', 'desc')
            ->where('blog_category_id', '1')->with(['category', 'author'])->first();
        $last2 = Post::query()->orderBy('created_at', 'desc')
            ->where('blog_category_id', '2')->with(['category', 'author'])->first();
        $last3 = Post::query()->orderBy('created_at', 'desc')
            ->whereIn('blog_category_id', [3, 4, 5, 6])->with(['category', 'author'])->first();

        return view('welcome')->with([
            'posts' => $a,
            'recent' => $recent,
            'last1' => $last1,
            'last2' => $last2,
            'last3' => $last3,
        ]);
    }

    // about us function
    public function about()
    {
        $aboutUs = app(GeneralSettings::class)->aboutUs;
        return view('about')->with([
            'aboutUs' => $aboutUs,
        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactSend(Request $request)
    {
        try {
            Mail::to($request->email)->queue(new NewPostMail($request->all()));
            return response()->json(['success' => true], 200);
        } catch (\Exception $e){
            dd($e);
            return response()->json(['success' => false, 'error' => $e], 500);
        }

    }

    public function single(Post $post)
    {
        $recent = Post::query()->where('id', '=', $post->id)->orderBy('created_at', 'desc')->with(['category', 'author'])->take(3)->get();
        return view('single')->with([
            'post' => $post->load(['category', 'author']),
            'recent' => $recent,
        ]);
    }

    public function youthNews(Category $category, Request $request)
    {
        $news = Post::where('blog_category_id', $category->id)->with('author')->paginate(10);
        return view('youthNews')->with
        ([
            'news' => $news,
            'category' => $category,
        ]);
    }
}
