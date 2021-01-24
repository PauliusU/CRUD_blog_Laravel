<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user()
    {
        // A post has a relationship with a user and it belongs to a user.
        return $this->belongsTo('App\Models\User');
    }

}
