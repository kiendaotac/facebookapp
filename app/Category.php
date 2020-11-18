<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $guarded = [];

    public function Children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function addProduct($data)
    {

    }
}
