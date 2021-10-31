<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductFeature extends Model
{
    protected $table ='products_features';
    //
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
