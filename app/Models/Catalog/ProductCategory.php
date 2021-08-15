<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;
use Eloquent;

/**
 *
 * @mixin Eloquent
 *
 * @property string             $name
 * @property string             $name_ru
 * @property string             $content
 * @property string             $meta_title
 * @property string             $meta_description
 * @property string             $meta_keywords
 * @property ProductCategory    $parent
 * @property Product            $products
 * @property ProductGroup       $groups
 * @property string             $slug
 * @property boolean            $status
 * @property string             $image
 */

class ProductCategory extends Model
{
    use NodeTrait;
    use SoftDeletes;

    /**
     * @var array
     */
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function groups()
    {
        return $this->hasMany(ProductGroup::class,'category_id','id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class,'category_id','id');
    }
}