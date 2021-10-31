<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    protected $table ='products_sizes';
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
