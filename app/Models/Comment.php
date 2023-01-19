<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    //get the book that owns the post

    public function post()
    {
        return $this->belongsTo(Book::class);
    }
}
