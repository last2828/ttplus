<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Eloquent;

/**
 *
 * @mixin Eloquent
 */

class ProductCategory extends Model
{
    use NodeTrait;
    protected $fillable = [
        'name',
        'name_ru',
        'content',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'parent_id',
        'slug',
        'status',
        'image'
    ];

    public function group()
    {
        return $this->hasMany(
            Group::class,
            'category_id',
            'id'
        );
    }

    public static function allCategories()
    {
        //get all categories with parents
        $categories = ProductCategory::with('parent')->get();

        //
        $categoriesRoot = ProductCategory::whereIsRoot()->get();

        //
        foreach($categories as $category){
            if (isset($category->parent['name'])) {
                $category['parent_name'] = $category->parent['name'];
            }
        }

        //return categories
        return compact(['categories', 'categoriesRoot']);
    }

    public static function storeCategory($fields)
    {
        //check slug and transliterate 'name' if slug = null
        $fields = AppHelper::checkSlug($fields);

        //check category parent if they not exist
        $fields = AppHelper::checkParent($fields);

        //create new category with fields
        self::create($fields);

        return true;
    }

    public static function updateCategory($fields, $id)
    {
        //check slug and transliterate 'name' if slug = null
        $fields = AppHelper::checkSlug($fields);

        //check category parent if they not exist
        $fields = AppHelper::checkParent($fields);

        //update current category
        ProductCategory::find($id)->update($fields);

        return true;
    }
}