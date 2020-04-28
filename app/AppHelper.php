<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Transliterate;

class AppHelper extends Model
{
    public static function checkSlug($fields)
    {
        //if 'slug' was not filled => transliterate 'name' to fill 'slug'
        if($fields['slug'] == null)
        {
            $fields['slug'] = Transliterate::slugify($fields['name']);
        }

        return $fields;
    }
}
