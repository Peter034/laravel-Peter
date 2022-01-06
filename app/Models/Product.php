<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = "prodId";
    protected $table = 'product';
    protected $fillable = [
        'prodId',
        'title',
        'price',
        'categoryId',
    ];

    public function category()
    {

        return $this->belongsTo('App\Models\Category', 'categoryId', 'categoryId');
    }
    public function productMedia()
    {
        return $this->hasMany('App\Models\ProductMedia', 'prodId', 'prodId');
    }
}
