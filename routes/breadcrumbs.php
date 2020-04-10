<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// Blog
Breadcrumbs::for('blog', function ($trail) {
    $trail->push('Статьи', route('posts.index'));
});


// Blog > Create Post
Breadcrumbs::for('create', function ($trail) {
    $trail->parent('blog');
    $trail->push('Добавить статью', route('posts.create'));
});

// Blog > Edit Post
Breadcrumbs::for('edit', function ($trail) {
    $trail->parent('blog');
    $trail->push('Изменить статью', route('posts.edit'));
});

// Home > Blog > [Category]
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('category', $post->category);
    $trail->push($post->title, route('post', $post->id));
});