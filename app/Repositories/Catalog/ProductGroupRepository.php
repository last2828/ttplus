<?php

namespace App\Repositories\Catalog;

use App\Repositories\CoreRepository;
use App\Models\Catalog\ProductGroup as Model;

/**
 * Class ProductGroupRepository
 *
 * @package App\Repositories\Catalog
 */
class ProductGroupRepository extends CoreRepository
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
     * Get all groups data for product select in admin panel
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