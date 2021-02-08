<?php

namespace App\Observers;

use App\Models\Blog\Post;
use Illuminate\Support\Str;

class PostObserver
{
    /**
     * Handle the post "creating" event.
     *
     * @param Post $post
     */
    public function creating(Post $post)
    {
        $this->setSlug($post);
    }

    /**
     * Handle the post "created" event.
     *
     * @param  \App\Models\Blog\Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        //
    }

    /**
     * Handle the post "updating" event.
     *
     * @param Post $post
     */
    public function updating(Post $post)
    {
        $this->setSlug($post);
    }

    /**
     * Handle the post "updated" event.
     *
     * @param  \App\Models\Blog\Post  $post
     * @return void
     */
    public function updated(Post $post)
    {
        //
    }

    /**
     * Handle the post "deleting" event.
     *
     * @param Post $post
     */
    public function deleting(Post $post)
    {
        //
    }

    /**
     * Handle the post "deleted" event.
     *
     * @param  \App\Models\Blog\Post  $post
     * @return void
     */
    public function deleted(Post $post)
    {
        //
    }

    /**
     * Set slug for model if they empty
     *
     * @param Post $post
     */
    protected function setSlug(Post $post)
    {
        if (empty($post->slug)) {
            $post->slug = Str::slug($post->title);
        }
    }
}
