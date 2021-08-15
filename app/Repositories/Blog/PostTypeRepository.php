<?php

namespace App\Repositories\Blog;

use App\Repositories\CoreRepository;
use App\Models\Blog\PostType as Model;

/**
 * Class PostTypeRepository
 *
 * @package App\Repositories\Blog
 */
class PostTypeRepository extends CoreRepository
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
}