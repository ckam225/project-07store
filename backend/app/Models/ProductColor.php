<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    protected $table ='products_colors';
    protected $fillable = [
        'name', 'product_id','type','title','content', 'price'
    ];


    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
