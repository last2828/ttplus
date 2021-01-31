<?php

namespace App\Repositories\Catalog;

use App\Models\Catalog\ProductCategory as Model;
use App\Repositories\CoreRepository;

/**
 * Class ProductCategoryRepository
 *
 * @package App\Repositories\Catalog
 */
class ProductCategoryRepository extends CoreRepository
{
    /**
     * Get model name for creating repository
     *
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * Get all categories data for product select in admin panel
     *
     * @return mixed
     */
    public function getAllForProductSelect()
    {
        $columns = ['id', 'name'];

        $result = $this->startCondition()
            ->select($columns)
            ->toBase()
            ->get();

        return $result;
    }
}