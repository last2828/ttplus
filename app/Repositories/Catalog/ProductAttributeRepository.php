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
     * Get attributes list data for catalog in admin panel
     *
     * @return mixed
     */
    public function getAllForAdminList()
    {
        $columns = ['id', 'name', 'units'];

        $result = $this->startCondition()
                        ->select($columns)
                        ->toBase()
                        ->get();

        return $result;
    }

    /**
     * Get attribute data for editing
     *
     * @param $id
     * @return mixed
     */
    public function getEditByIdForAdmin($id)
    {
        $columns = [
            'id',
            'name',
            'units',
        ];

        $result = $this->startCondition()
                        ->select($columns)
                        ->find($id)
                        ->first();

        return $result;
    }
}