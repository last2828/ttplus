<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    /**
     * Array of valid fields for bulk filling
     *
     * @var array
     */
    protected $fillable = [
      'name',
      'email',
      'phone',
      'comment'
    ];
}
