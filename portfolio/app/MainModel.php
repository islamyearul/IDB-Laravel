<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainModel extends Model
{
    protected $fillable = [
        'title', 'sub_title', 'bg_image', 'resume'
    ];
}
