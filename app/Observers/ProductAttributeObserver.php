<?php

namespace App\Observers;

use App\Models\Catalog\ProductAttribute;

class ProductAttributeObserver
{
    /**
     * Handle the product attribute "created" event.
     *
     * @param  \App\Models\Catalog\ProductAttribute  $productAttribute
     * @return void
     */
    public function created(ProductAttribute $productAttribute)
    {
        //
    }

    /**
     * Handle the product attribute "updated" event.
     *
     * @param  \App\Models\Catalog\ProductAttribute  $productAttribute
     * @return void
     */
    public function updated(ProductAttribute $productAttribute)
    {
        //
    }

    /**
     * Handle the product attribute "deleted" event.
     *
     * @param  \App\Models\Catalog\ProductAttribute  $productAttribute
     * @return void
     */
    public function deleted(ProductAttribute $productAttribute)
    {
        //
    }

    /**
     * Handle the product attribute "restored" event.
     *
     * @param  \App\Models\Catalog\ProductAttribute  $productAttribute
     * @return void
     */
    public function restored(ProductAttribute $productAttribute)
    {
        //
    }

    /**
     * Handle the product attribute "force deleted" event.
     *
     * @param  \App\Models\Catalog\ProductAttribute  $productAttribute
     * @return void
     */
    public function forceDeleted(ProductAttribute $productAttribute)
    {
        //
    }
}
