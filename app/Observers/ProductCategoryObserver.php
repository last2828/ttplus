<?php

namespace App\Observers;

use App\Models\Catalog\ProductCategory;
use Illuminate\Support\Str;

class ProductCategoryObserver
{
    /**
     * Handle the product category "creating" event.
     *
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
     * Handle the product category "updating" event.
     *
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
     * Handle the product category "deleting" event.
     *
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
