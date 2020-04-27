<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Transliterate;

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

    public static function getAllGroups()
    {
        //get all groups from db
        $groups = self::all();

        //display group catalog
        return view('admin.group.groups', compact('groups'));
    }

    public static function createGroup()
    {
        //get components for group creating
        $categories = ProductCategory::all();

        //display create form with components
        return view('admin.group.create-group', compact('categories'));
    }

    public static function storeGroup($fields)
    {
        //if 'slug' was not filled => transliterate 'name' to fill 'slug'
        if($fields['slug'] == null)
        {
            $fields['slug'] = Transliterate::slugify($fields['name']);
        }

        //save group in db
        Group::create($fields);

        //back to the group catalog
        return redirect()->route('groups.index');

    }

    public static function editGroup($id)
    {

    }

    public static function updateGroup($fields, $id)
    {

    }

    public static function deleteGroup($id)
    {

    }
}
