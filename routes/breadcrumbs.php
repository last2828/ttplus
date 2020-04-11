<?php

// Blog
Breadcrumbs::for('blog', function ($trail) {
    $trail->push('Блог', route('posts.index'));
});

// Blog > Create Post
Breadcrumbs::for('create-post', function ($trail) {
    $trail->parent('blog');
    $trail->push('Добавить статью', route('posts.create'));
});

// Blog > Edit Post
Breadcrumbs::for('edit-post', function ($trail, $post) {
    $trail->parent('blog');
    $trail->push($post->title, route('posts.edit', $post->id));
});

// Blog > Categories
Breadcrumbs::for('blog-categories', function ($trail) {
    $trail->parent('blog');
    $trail->push('Категории блога', route('categories.index'));
});

// Blog > Category > Create
Breadcrumbs::for('create-blog-category', function ($trail) {
    $trail->parent('blog-categories');
    $trail->push('Создать', route('categories.create'));
});

// Blog > Category > Edit
Breadcrumbs::for('edit-blog-category', function ($trail, $category) {
    $trail->parent('blog-categories');
    $trail->push($category->name, route('categories.edit', $category->id));
});