<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id', 'url'];

    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function Images()
    {
        return $this->hasMany(Image::class, 'product_id', 'id');
    }

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function Rate()
    {
        return $this->hasMany(Rate::class, 'product_id', 'id');
    }
}
