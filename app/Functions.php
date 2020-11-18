<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Functions extends Model {
	use SoftDeletes;

	protected $table = 'functions';
	protected $dates = ['deleted_at'];
	protected $fillable = ['parent_id', 'name', 'description', 'route', 'controller', 'ordering', 'icon', 'state', 'access'];

	public function childs() {
		return $this->hasMany('App\Functions', 'parent_id', 'id');
	}
}
