<?php
namespace App\Repositories\Catalog;

use App\Models\Catalog\ProductAttribute as Model;
use App\Repositories\CoreRepository;

class ProductAttributeRepository extends CoreRepository
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
     * Get all attributes data for product select in admin panel
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