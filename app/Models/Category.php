<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function tutorials()
    {
        return $this->hasMany(Tutorial::class);
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
