<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caregory extends Model
{
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function posts()
    {
        return $this->hasMany(PostModel::class);
    }
}
