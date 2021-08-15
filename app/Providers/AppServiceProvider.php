<?php

namespace App\Providers;

use App\Models\Blog\Post;
use App\Models\Catalog\Product;
use App\Models\Catalog\ProductAttribute;
use App\Models\Catalog\ProductCategory;
use App\Models\Catalog\ProductGroup;
use App\Models\Offer;
use App\Models\Subscription;
use App\Observers\OfferObserver;
use App\Observers\PostObserver;
use App\Observers\ProductAttributeObserver;
use App\Observers\ProductCategoryObserver;
use App\Observers\ProductGroupObserver;
use App\Observers\ProductObserver;
use App\Observers\SubscriptionObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        /*
         * Observers for Catalog models
         */
        Product::observe(ProductObserver::class);
        ProductGroup::observe(ProductGroupObserver::class);
        ProductCategory::observe(ProductCategoryObserver::class);
        ProductAttribute::observe(ProductAttributeObserver::class);
        Offer::observe(OfferObserver::class);
        Subscription::observe(SubscriptionObserver::class);

        /*
         * Observers for Blog models
         */
        Post::observe(PostObserver::class);
    }
}
