<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'files';

    protected $fillable = [
        'title', 'file_name', 'extension', 'content', 'size', 'year', 'month', 'creator_id', 'states'
    ];
}
