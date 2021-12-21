<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    public function categories()
    {
        return $this->belongsTo(Caregory::class);
    }
}
