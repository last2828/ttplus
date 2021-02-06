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

    /**
     * Get sub categories data by parent name for catalog in frontend
     *
     * @param $parentName
     * @return array
     */
    public function getSubCategoriesByParentName($parentName)
    {
        $result = $this->startCondition()
                        ->select('id')
                        ->where('name', $parentName)
                        ->with('children:name,slug,parent_id')
                        ->first()
                        ->toArray()['children'];

        return $result;
    }

    /**
     * @return mixed
     */
    public function getAllCategoriesForAside()
    {
        $columns = ['id', 'name_ru'];

        $result = $this->startCondition()
                        ->select($columns)
                        ->with('children:name,slug,parent_id')
                        ->get();

        return $result;
    }

    /**
     * Get category data for frontend showing
     *
     * @param $slug
     * @return mixed
     */
    public function getOneMainBySlug($slug)
    {
        $columns = [
            'id',
            'name',
            'content',
            'meta_title',
            'meta_keywords',
            'meta_description',
            'slug',
            'image'
        ];

        $result = $this->startCondition()
                        ->select($columns)
                        ->with('children:id,parent_id,name,image,slug')
                        ->where('slug', $slug)
                        ->first();

        return $result;
    }

    /**
     * Get category data for frontend showing
     *
     * @param $slug
     * @return mixed
     */
    public function getOneSubBySlug($slug)
    {
        $columns = [
            'id',
            'name',
            'content',
            'meta_title',
            'meta_keywords',
            'meta_description',
            'parent_id',
            'slug',
            'image'
        ];

        $result = $this->startCondition()
                        ->select($columns)
                        ->with(['parent:id,name,slug',
                                'groups' => function($query) {
                                    $query->select('id', 'category_id', 'name', 'slug')
                                            ->with('products:id,group_id,name,slug')
                                            ->get();
                                    }
                                ])
                        ->where('slug', $slug)
                        ->first();

        return $result;
    }
}