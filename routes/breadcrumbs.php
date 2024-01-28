<?php
/*
 * Breadcrumbs for Admin panel
 *
 * Info page
 */
Breadcrumbs::for('info-page', function ($trail, $page) {
  $trail->push($page->title, route('admin.info_pages.index', $page->key), ['front' => false]);
});

/*
 * Blog
 */
Breadcrumbs::for('blog', function ($trail) {
    $trail->push('Blog', route('admin.blog.posts.index'), ['front' => false]);
});

/*
 * Blog > Create Post
 */
Breadcrumbs::for('create-post', function ($trail) {
    $trail->parent('blog');
    $trail->push('Add article', route('admin.blog.posts.create'));
});

/*
 * Blog > Edit Post
 */
Breadcrumbs::for('edit-post', function ($trail, $post) {
    $trail->parent('blog');
    $trail->push($post->title, route('admin.blog.posts.edit', $post->id));
});

/*
 * Product
 */
Breadcrumbs::for('catalog', function ($trail) {
    $trail->push('Catalog', route('admin.catalog.products.index'), ['front' => false]);
});

/*
 * Product > Create
 */
Breadcrumbs::for('create-product', function ($trail) {
    $trail->parent('catalog');
    $trail->push('Create', route('admin.catalog.products.create'));
});

/*
 * Product > Edit
 */
Breadcrumbs::for('edit-product', function ($trail, $product) {
    $trail->parent('catalog');
    $trail->push($product->name, route('admin.catalog.products.edit', $product->id));
});

/*
 * Product > Groups
 */
Breadcrumbs::for('product-groups', function ($trail) {
    $trail->parent('catalog');
    $trail->push('Groups', route('admin.catalog.groups.index'));
});

/*
 * Product > Groups > Create
 */
Breadcrumbs::for('create-group', function ($trail) {
    $trail->parent('product-groups');
    $trail->push('New group', route('admin.catalog.groups.create'));
});

/*
 * Product > Groups > Edit
 */
Breadcrumbs::for('edit-group', function ($trail, $group) {
    $trail->parent('product-groups');
    $trail->push($group->name, route('admin.catalog.groups.edit', $group->id));
});

/*
 * Product > Categories
 */
Breadcrumbs::for('product-categories', function ($trail) {
    $trail->parent('catalog');
    $trail->push('Categories', route('admin.catalog.product_categories.index'));
});

/*
 * Product > Categories > Create
 */
Breadcrumbs::for('create-category', function ($trail) {
    $trail->parent('product-categories');
    $trail->push('New', route('admin.catalog.product_categories.create'));
});

/*
 * Product > Categories > Edit
 */
Breadcrumbs::for('edit-category', function ($trail, $category) {
    $trail->parent('product-categories');
    $trail->push($category->name, route('admin.catalog.product_categories.edit', $category->id));
});

/*
 * Product > Attributes
 */
Breadcrumbs::for('product-attributes', function ($trail) {
    $trail->parent('catalog');
    $trail->push('Attributes', route('admin.catalog.attributes.index'));
});

/*
 * Product > Attributes > Create
 */
Breadcrumbs::for('create-attribute', function ($trail) {
    $trail->parent('product-attributes');
    $trail->push('New', route('admin.catalog.attributes.create'));
});

/*
 * Product > Attributes > Edit
 */
Breadcrumbs::for('edit-attribute', function ($trail, $attribute) {
    $trail->parent('product-attributes');
    $trail->push($attribute->name, route('admin.catalog.attributes.edit', $attribute->id));
});




/*
 * Breadcrumbs for Frontend views
 *
 * Index page
 */
Breadcrumbs::for('front', function ($trail) {
  $trail->push('Home', route('pages.home'), ['front' => true]);
});

/*
 * Catalog
 */
Breadcrumbs::for('front-catalog', function ($trail) {
  $trail->parent('front');
  $trail->push('Catalog', route('pages.catalog.index'));
});

/*
 * Catalog > Main Category
 */
Breadcrumbs::for('catalog-brand', function ($trail, $category) {
  $trail->parent('front-catalog');
  $trail->push($category->name, route('pages.catalog.maincategory', $category->slug));
});

/*
 * Catalog > Main Category > Sub Category
 */
Breadcrumbs::for('catalog-brand-category', function ($trail, $category) {
  $trail->parent('catalog-brand', $category->parent);
  $trail->push($category->name, route('pages.catalog.category.subcategory', $category->slug));
});

/*
 * Catalog > Main Category > Sub Category > Group
 */
Breadcrumbs::for('catalog-category-group', function ($trail, $group) {
    $trail->parent('catalog-brand-category', $group->category);
    $trail->push($group->name);
});

/*
 * Catalog > Main Category > Sub Category > Product
 */
Breadcrumbs::for('catalog-brand-category-product', function ($trail, $product) {
  $trail->parent('catalog-brand-category', $product->category);
  $trail->push($product->name);
});

/*
 * Index > About page
 */
Breadcrumbs::for('front-about', function ($trail) {
  $trail->parent('front');
  $trail->push('About company');
});

/*
 * Index > Contact page
 */
Breadcrumbs::for('front-contact', function ($trail) {
  $trail->parent('front');
  $trail->push('Contacts');
});

/*
 * Index > News
 */
Breadcrumbs::for('front-news', function ($trail) {
  $trail->parent('front');
  $trail->push('Useful information', route('pages.posts.index'));
});

/*
 * Index > News > Post
 */
Breadcrumbs::for('front-post', function ($trail, $post) {
  $trail->parent('front-news');
  $trail->push('Article: «' . $post->title . '»');
});
