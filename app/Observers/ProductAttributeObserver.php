<?php

namespace App\Observers;

use App\Models\Catalog\ProductAttribute;

class ProductAttributeObserver
{
    /**
     * Handle the product attribute "creating" event.
     *
     * @param ProductAttribute $productAttribute
     */
    public function creating(ProductAttribute $productAttribute)
    {
        //
    }

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
     * Handle the product attribute "updating" event.
     *
     * @param ProductAttribute $productAttribute
     */
    public function updating(ProductAttribute $productAttribute)
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
     * Handle the product attribute "deleting" event.
     *
     * @param ProductAttribute $productAttribute
     */
    public function deleting(ProductAttribute $productAttribute)
    {
        $this->checkRelationWithProducts($productAttribute);
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
     * @param ProductAttribute $productAttribute
     * @return bool
     */
    protected function checkRelationWithProducts(ProductAttribute $productAttribute)
    {
        if ($productAttribute->products->isNotEmpty()) {
            return false;
        }
    }
}
