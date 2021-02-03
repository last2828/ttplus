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
    public function getAllForSelect()
    {
        $columns = ['id', 'name', 'parent_id'];

        $result = $this->startCondition()
                        ->select($columns)
                        ->with('parent:id,name')
                        ->get();

        return $result;
    }

    /**
     * Get category data for editing
     *
     * @param $id
     * @return mixed
     */
    public function getEditByIdForAdmin($id)
    {
        $columns = [
            'id',
            'name',
            'name_ru',
            'content',
            'meta_title',
            'meta_description',
            'meta_keywords',
            'parent_id',
            'slug',
            'status',
            'image'
        ];

        $result = $this->startCondition()
                        ->select($columns)
                        ->with('parent:id,name')
                        ->find($id);

        return $result;
    }

    /**
     * Get categories list data for catalog in admin panel
     *
     * @return mixed
     */
    public function getAllForAdminList()
    {
        $columns = ['id', 'name', 'status', 'parent_id'];

        $result = $this->startCondition()
                        ->select($columns)
                        ->with('parent:id,name')
                        ->get();

        return $result;
    }
}