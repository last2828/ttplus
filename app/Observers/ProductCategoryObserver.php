<?php

namespace App\Observers;

use App\Models\Catalog\ProductCategory;
use Illuminate\Support\Str;

class ProductCategoryObserver
{
    /**
     * @param ProductCategory $productCategory
     */
    public function creating(ProductCategory $productCategory)
    {
        $this->setParent($productCategory);
        $this->setSlug($productCategory);
    }

    /**
     * Handle the product category "created" event.
     *
     * @param  \App\Models\Catalog\ProductCategory  $productCategory
     * @return void
     */
    public function created(ProductCategory $productCategory)
    {
        //
    }

    /**
     * @param ProductCategory $productCategory
     */
    public function updating(ProductCategory $productCategory)
    {
        $this->setParent($productCategory);
        $this->setSlug($productCategory);
    }

    /**
     * Handle the product category "updated" event.
     *
     * @param  \App\Models\Catalog\ProductCategory  $productCategory
     * @return void
     */
    public function updated(ProductCategory $productCategory)
    {
        //
    }

    /**
     * @param ProductCategory $productCategory
     */
    public function deleting(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Handle the product category "deleted" event.
     *
     * @param  \App\Models\Catalog\ProductCategory  $productCategory
     * @return void
     */
    public function deleted(ProductCategory $productCategory)
    {
        //
    }

    /**
     * @param ProductCategory $productCategory
     */
    public function restoring(ProductCategory $productCategory)
    {
        //
    }
    /**
     * Handle the product category "restored" event.
     *
     * @param  \App\Models\Catalog\ProductCategory  $productCategory
     * @return void
     */
    public function restored(ProductCategory $productCategory)
    {
        //
    }

    /**
     * @param ProductCategory $productCategory
     */
    public function forceDeleting(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Handle the product category "force deleted" event.
     *
     * @param  \App\Models\Catalog\ProductCategory  $productCategory
     * @return void
     */
    public function forceDeleted(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Set slug as name for model if they empty
     *
     * @param ProductCategory $productCategory
     */
    protected function setSlug(ProductCategory $productCategory)
    {
        if (empty($productCategory->slug)) {
            $productCategory->slug = Str::slug($productCategory->name);
        }
    }

    /**
     * Set parent as '0' for model if they empty
     *
     * @param ProductCategory $productCategory
     */
    protected function setParent(ProductCategory $productCategory)
    {
        if (empty($productCategory->parent_id)) {
            $productCategory->parent_id = 0;
        }
    }
}
