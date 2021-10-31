<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'uid', 'name', 'description','regular_price','discount_price', 'image', 'store_id', 'category_id'
    ];

    public function colors()
    {
        return $this->hasMany('App\Models\ProductColor');
    }
    public function sizes()
    {
        return $this->hasMany('App\Models\ProductSize');
    }
    public function features()
    {
        return $this->hasMany('App\Models\ProductFeature');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }


}
