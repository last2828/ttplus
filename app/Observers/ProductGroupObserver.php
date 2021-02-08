<?php

namespace App\Observers;

use App\Models\Catalog\ProductGroup;
use Illuminate\Support\Str;

class ProductGroupObserver
{
    /**
     * Handle the product group "creating" event.
     *
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
     * Handle the product group "updating" event.
     *
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
     * Handle the product group "deleting" event.
     *
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
