<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Get the comments for the book

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}