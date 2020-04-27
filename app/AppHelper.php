<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Transliterate;

class AppHelper extends Model
{
    public static function checkSlug($fields)
    {
        //if 'slug' was not filled => transliterate 'name' to fill 'slug'
        if($fields['slug'] == null and !empty($fields['name']))
        {
            $fields['slug'] = Transliterate::slugify($fields['name']);
        }
        elseif($fields['slug'] == null and !empty($fields['title']))
        {
            $fields['slug'] = Transliterate::slugify($fields['title']);
        }

        return $fields;
    }
}
