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
     * Get model for creating repository
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
    public function getAllForSelect()
    {
        $columns = ['id', 'name'];

        $result = $this->startCondition()
                        ->select($columns)
                        ->toBase()
                        ->get();

        return $result;
    }

    /**
     * Get group data for editing
     *
     * @param $id
     * @return mixed
     */
    public function getEditByIdForAdmin($id)
    {
        $columns = [
            'id',
            'name',
            'slug',
            'category_id',
            'image'
        ];

        $result = $this->startCondition()
                        ->select($columns)
                        ->with('category:id,name')
                        ->find($id);

        return $result;
    }

    /**
     * Get groups list data for catalog in admin panel
     *
     * @return mixed
     */
    public function getAllForAdminList()
    {
        $columns = ['id', 'name', 'category_id'];

        $result = $this->startCondition()
                        ->select($columns)
                        ->with('category:id,name')
                        ->get();

        return $result;
    }
}