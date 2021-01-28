<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Transliterate;

class AppHelper extends Model
{
    public static function checkSlug($fields)
    {
        //if 'slug' was not filled => transliterate 'name' or 'title' to fill 'slug'
        if($fields['slug'] == null and !empty($fields['name']))
        {
            $fields['slug'] = Transliterate::slugify($fields['name']);
        }
        elseif($fields['slug'] == null and !empty($fields['name']))
        {
            $fields['slug'] = Transliterate::slugify($fields['title']);
        }

        return $fields;
    }

    public static function checkParent($fields)
    {
        if($fields['parent_id'] == 'null')
        {
            $fields['parent_id'] = null;
        }

        return $fields;
    }
}
