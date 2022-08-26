<?php

namespace App\Observers;
use App\Models\Author;
class UserObserver
{
        /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\Author  $post
     * @return void
     */
    public function updated(Author $post)
    {
        //
        if ($post->photo == '' || $post->photo == NULL){
            $post->photo = 'blog/ph.jpg';
            $post->save();
        }
    }

            /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\Author  $post
     * @return void
     */
    public function created(Author $post)
    {
        //
        if ($post->photo == '' || $post->photo == NULL){
            $post->photo = 'blog/ph.jpg';
            $post->save();
        }
    }
}
