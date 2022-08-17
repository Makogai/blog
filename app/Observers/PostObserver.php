<?php

namespace App\Observers;

use App\Mail\NewPostMail;
use App\Models\Post;
use App\Models\Newsletter;
use Illuminate\Support\Facades\Mail;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        if ($post->banner == ''){
            $post->banner = 'blog/ph.jpg';
            $post->save();
        }
    }

    /**
     * Handle the Post "updated" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function updated(Post $post)
    {
        //
        if ($post->banner == ''){
            $post->banner = 'blog/ph.jpg';
            $post->save();
        }
    }

    /**
     * Handle the Post "deleted" event.
     *
     * @param  \App\Models\Blog\Post  $post
     * @return void
     */
    public function deleted(Post $post)
    {
        //
    }

    /**
     * Handle the Post "restored" event.
     *
     * @param  \App\Models\Blog\Post  $post
     * @return void
     */
    public function restored(Post $post)
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     *
     * @param  \App\Models\Blog\Post  $post
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        //
    }
}