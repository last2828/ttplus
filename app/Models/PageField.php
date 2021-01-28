<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageField extends Model
{

  protected $casts = [
    'features_content' => 'array',
    'years_1' => 'array',
    'years_2' => 'array',
    'years_3' => 'array',
    'blocks_1' => 'array',
    'blocks_2' => 'array',
    'blocks_3' => 'array',
    'awards' => 'array',
    'licenses' => 'array',
    'shows' => 'array',
  ];

  protected $fillable = [
    'key',
    'title',
    'description',
    'head_image',
    'partner_title',
    'partner_title_description',
    'features_content',
    'quote_title',
    'years_title',
    'years_1',
    'years_2',
    'years_3',
    'blocks_1',
    'blocks_2',
    'blocks_3',
    'awards',
    'licenses',
    'shows',

    'address',
    'phone',
    'fax',
  ];
}
