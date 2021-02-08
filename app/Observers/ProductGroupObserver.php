<?php

namespace App\Observers;

use App\Models\Catalog\ProductGroup;
use Illuminate\Support\Str;

class ProductGroupObserver
{
    /**
     * @param ProductGroup $productGroup
     */
    public function creating(ProductGroup $productGroup)
    {
        $this->setSlug($productGroup);
    }

    /**
     * Handle the product group "created" event.
     *
     * @param  \App\Models\Catalog\ProductGroup  $productGroup
     * @return void
     */
    public function created(ProductGroup $productGroup)
    {

    }

    /**
     * @param ProductGroup $productGroup
     */
    public function updating(ProductGroup $productGroup)
    {
        $this->setSlug($productGroup);
    }

    /**
     * Handle the product group "updated" event.
     *
     * @param  \App\Models\Catalog\ProductGroup  $productGroup
     * @return void
     */
    public function updated(ProductGroup $productGroup)
    {
        //
    }

    /**
     * @param ProductGroup $productGroup
     */
    public function deleting(ProductGroup $productGroup)
    {
        //
    }

    /**
     * Handle the product group "deleted" event.
     *
     * @param  \App\Models\Catalog\ProductGroup  $productGroup
     * @return void
     */
    public function deleted(ProductGroup $productGroup)
    {
        //
    }

    /**
     * @param ProductGroup $productGroup
     */
    public function restoring(ProductGroup $productGroup)
    {
        //
    }

    /**
     * Handle the product group "restored" event.
     *
     * @param  \App\Models\Catalog\ProductGroup  $productGroup
     * @return void
     */
    public function restored(ProductGroup $productGroup)
    {
        //
    }

    /**
     * @param ProductGroup $productGroup
     */
    public function forceDeleting(ProductGroup $productGroup)
    {
        //
    }

    /**
     * Handle the product group "force deleted" event.
     *
     * @param  \App\Models\Catalog\ProductGroup  $productGroup
     * @return void
     */
    public function forceDeleted(ProductGroup $productGroup)
    {
        //
    }

    /**
     * Set slug for model if they empty
     *
     * @param ProductGroup $productGroup
     */
    protected function setSlug(ProductGroup $productGroup)
    {
        if (empty($productGroup->slug)) {
            $productGroup->slug = Str::slug($productGroup->name);
        }
    }
}
