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

    /**
     * Get all posts by type id with paginator
     *
     * @param $type
     * @param $paginate
     * @return mixed
     */
    public function getAllForBlogByType($type, $paginate)
    {
        $columns = ['title', 'slug', 'image'];

        $result = $this->startCondition()
                        ->select($columns)
                        ->where('type_id', $type)
                        ->paginate($paginate);

        return $result;
    }

    /**
     * @param $slug
     * @return mixed
     */
    public function getOneBySlug($slug)
    {
        $columns = ['id', 'title', 'image', 'content', 'slug'];

        $result = $this->startCondition()
                        ->select($columns)
                        ->where('slug', $slug)
                        ->toBase()
                        ->first();

        return $result;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getBelowById($id)
    {
        $columns = ['title', 'image', 'slug'];

        $result = $this->startCondition()
                        ->select($columns)
                        ->where('id', '<', $id)
                        ->orderBy('id', 'desc')
                        ->toBase()
                        ->first();

        return $result;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getAboveById($id)
    {
        $columns = ['title', 'image', 'slug'];

        $result = $this->startCondition()
                        ->select($columns)
                        ->where('id', '>', $id)
                        ->orderBy('id', 'asc')
                        ->toBase()
                        ->first();

        return $result;
    }

    public function getFirstPost()
    {
        
    }
}