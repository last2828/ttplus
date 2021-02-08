<?php

namespace App\Models\Catalog;

use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Product
 *
 * @mixin Eloquent
 *
 * @property string             $name
 * @property string             $content
 * @property string             $meta_title
 * @property string             $meta_keywords
 * @property string             $meta_description
 * @property string             $model
 * @property ProductCategory    $category
 * @property ProductGroup       $group
 * @property ProductAttribute   $attributes
 * @property string             $slug
 * @property string             $image
 * @property boolean            $status
 */

class Product extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = [
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group()
    {
        return $this->belongsTo(ProductGroup::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function attributes()
    {
        return $this->belongsToMany(ProductAttribute::class,'product_product_attributes')->withPivot('value');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id', 'id');
    }

    /**
     * Set attributes for relation many-to-many
     * @param $fields
     * @return bool
     */
    public function setAttributes($fields)
    {
        $attributes = $this->prepareAttributes($fields);
        $this->attributes()->detach();

        if($attributes)
        {
            $this->attachAttributes($attributes);
            return true;
        }

        return false;
    }

    /**
     * Prepare attributes array if they isset
     *
     * @param $fields
     * @return array|bool
     */
    private function prepareAttributes($fields)
    {
        $new = $this->checkNewAttributes($fields);
        $old = $this->checkOldAttributes($fields);

        switch(true) {
            case ($new == true && $old == true):
                return $attributes = array_merge($new, $old);
                break;
            case $new == false && $old  == true:
                return $old;
                break;
            case $new == true && $old  == false:
                return $new;
                break;
        }

        return false;
    }

    /**
     * Check fields for new attributes
     *
     * @param $fields
     * @return bool
     */
    private function checkNewAttributes($fields)
    {
        if(isset($fields['attributes'])) {
            return $fields['attributes'];
        }

        return false;
    }

    /**
     * Check fields for old attributes
     *
     * @param $fields
     * @return bool
     */
    private function checkOldAttributes($fields)
    {
        if(isset($fields['attributes_old'])) {
            return $fields['attributes_old'];
        }

        return false;
    }

    /**
     * Attach attributes for Product model
     *
     * @param $attributes
     * @return bool
     */
    private function attachAttributes($attributes)
    {
        foreach($attributes as $attribute) {
            self::attributes()->attach($attribute['attribute_id'], array('value' => $attribute['value']));
        }

        return true;
    }
}
