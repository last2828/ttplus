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

// Product
Breadcrumbs::for('catalog', function ($trail) {
    $trail->push('Каталог', route('products.index'));
});

// Product > Create
Breadcrumbs::for('create-product', function ($trail) {
    $trail->parent('catalog');
    $trail->push('Создать', route('products.create'));
});

// Product > Edit
Breadcrumbs::for('edit-product', function ($trail, $product) {
    $trail->parent('catalog');
    $trail->push($product->name, route('products.edit', $product->id));
});

// Product > Groups
Breadcrumbs::for('product-groups', function ($trail) {
    $trail->parent('catalog');
    $trail->push('Группы товаров', route('groups.index'));
});

// Product > Groups > Create
Breadcrumbs::for('create-group', function ($trail) {
    $trail->parent('product-groups');
    $trail->push('Новая группа', route('groups.create'));
});

// Product > Groups > Edit
Breadcrumbs::for('edit-group', function ($trail, $group) {
    $trail->parent('product-groups');
    $trail->push($group->name, route('groups.edit', $group->id));
});

// Product > Categories
Breadcrumbs::for('product-categories', function ($trail) {
    $trail->parent('catalog');
    $trail->push('Категории товаров', route('categories.index'));
});

// Product > Categories > Create
Breadcrumbs::for('create-category', function ($trail) {
    $trail->parent('product-categories');
    $trail->push('Новая', route('categories.create'));
});

// Product > Categories > Edit
Breadcrumbs::for('edit-category', function ($trail, $category) {
    $trail->parent('product-categories');
    $trail->push($category->name, route('categories.edit', $category->id));
});

// Product > Attributes
Breadcrumbs::for('product-attributes', function ($trail) {
    $trail->parent('catalog');
    $trail->push('Характеристики товаров', route('attributes.index'));
});

// Product > Attributes > Create
Breadcrumbs::for('create-attribute', function ($trail) {
    $trail->parent('product-attributes');
    $trail->push('Новая', route('attributes.create'));
});

// Product > Attributes > Edit
Breadcrumbs::for('edit-attribute', function ($trail, $attribute) {
    $trail->parent('product-attributes');
    $trail->push($attribute->name, route('attributes.edit', $attribute->id));
});