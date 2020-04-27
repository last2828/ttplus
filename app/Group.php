<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Group
 *
 * @mixin \Eloquent
 */
class Group extends Model
{
    protected $fillable = [
        'name',
        'category_id',
        'slug',
        ];

    public function product()
    {
        return $this->hasMany(
            Product::class
        );
    }

    public function category()
    {
        return $this->hasOne(
            ProductCategory::class,
            'id',
            'category_id'
        );
    }

    public static function storeGroup($fields)
    {
        //check slug and transliterate 'name' if slug = null
        $fields = AppHelper::checkSlug($fields);

        //save group in db
        self::create($fields);

        return true;
    }

    public static function updateGroup($fields, $id)
    {
        //check slug and transliterate 'name' if slug = null
        $fields = AppHelper::checkSlug($fields);

        //update group in db
        self::find($id)->update($fields);

        return true;
    }

}
