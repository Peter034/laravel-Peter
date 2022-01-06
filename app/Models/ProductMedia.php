<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductMedia extends Model
{
    protected $table = 'product_media';
    protected $fillable = [
        'id',
        'url',
        'prodId'
    ];
}
