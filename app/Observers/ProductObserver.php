<?php

namespace App\Observers;

use App\Models\Catalog\Product;
use Illuminate\Support\Str;

class ProductObserver
{
    /**
     * @param Product $product
     */
    public function creating(Product $product)
    {
        $this->setSlug($product);
    }
    /**
     * Handle the product "created" event.
     *
     * @param  \App\Models\Catalog\Product  $product
     * @return void
     */
    public function created(Product $product)
    {
        //
    }

    /**
     * @param Product $product
     */
    public function updating(Product $product)
    {
        $this->setSlug($product);
    }

    /**
     * Handle the product "updated" event.
     *
     * @param  \App\Models\Catalog\Product  $product
     * @return void
     */
    public function updated(Product $product)
    {
        //
    }

    /**
     * @param Product $product
     */
    public function deleting(Product $product)
    {
        $product->attributes()->detach();
    }

    /**
     * Handle the product "deleted" event.
     *
     * @param  \App\Models\Catalog\Product  $product
     * @return void
     */
    public function deleted(Product $product)
    {
        //
    }

    /**
     * @param Product $product
     */
    public function restoring(Product $product)
    {
        //
    }

    /**
     * Handle the product "restored" event.
     *
     * @param  \App\Models\Catalog\Product  $product
     * @return void
     */
    public function restored(Product $product)
    {
        //
    }

    /**
     * @param Product $product
     */
    public function forceDeleting(Product $product)
    {
        //
    }

    /**
     * Handle the product "force deleted" event.
     *
     * @param  \App\Models\Catalog\Product  $product
     * @return void
     */
    public function forceDeleted(Product $product)
    {
        //
    }

    /**
     * Set slug for model if they empty
     *
     * @param Product $product
     */
    protected function setSlug(Product $product)
    {
        if (empty($product->slug)) {
            $product->slug = Str::slug($product->name);
        }
    }
}
