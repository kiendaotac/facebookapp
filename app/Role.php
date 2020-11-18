<?php

namespace App;

use Trebol\Entrust\EntrustRole;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends EntrustRole
{
    use SoftDeletes;
    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }
}