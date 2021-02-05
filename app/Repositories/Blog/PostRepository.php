<?php

namespace App\Repositories\Blog;

use App\Repositories\CoreRepository;
use App\Models\Blog\Post as Model;

/**
 * Class PostRepository
 *
 * @package App\Repositories\Blog
 */
class PostRepository extends CoreRepository
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
     * Получаем несколько постов для главной страницы сайта
     *
     * @param integer $limit
     *
     * @return mixed
     */
    public function getForIndexPage($limit)
    {
        $columns = ['title', 'slug', 'image'];

        $result = $this->startCondition()
                        ->select($columns)
                        ->limit($limit)
                        ->get();

        return $result;
    }
}