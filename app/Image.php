<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];

    public function Product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
