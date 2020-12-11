<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';
    protected $fillable = ['user_id','date','time'];
    protected $casts = [
        'time'  =>  'array'
    ];

    public function User(){
        return $this->belongsTo(User::class, 'user_id', 'id')->withTrashed();
    }
}
