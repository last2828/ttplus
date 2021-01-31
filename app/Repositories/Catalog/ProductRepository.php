<?php

namespace App\Repositories\Catalog;

use App\Models\Catalog\Product as Model;
use App\Models\Catalog\Product;
use App\Repositories\CoreRepository;

/**
 * Class ProductRepository
 *
 * @package App\Repositories\Catalog
 */
class ProductRepository extends CoreRepository
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
     * Get products list data for catalog in admin panel
     *
     * @return mixed
     */
    public function getAllCatalogForAdmin()
    {
        $columns = ['id', 'name', 'status', 'category_id', 'group_id'];

        $result = $this->startCondition()
                        ->select($columns)
                        ->with(['category:id,name', 'group:id,name'])
                        ->get();

        return $result;
    }

    /**
     * Get product data for editing
     *
     * @param $id
     * @return mixed
     */
    public function getEditByIdForAdmin($id)
    {
        $columns = [
            'name',
            'content',
            'meta_title',
            'meta_keywords',
            'meta_description',
            'model',
            'category_id',
            'group_id',
            'slug',
            'image',
            'status'
        ];

        $result = $this->startCondition()
                        ->select($columns)
                        ->with(['category:id,name', 'group:id,name', 'attributes:id,name,units'])
                        ->find($id)
                        ->first();

        return $result;
    }
}