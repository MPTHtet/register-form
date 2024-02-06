<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Parallax\FilamentComments\Models\Traits\HasFilamentComments;

class Post extends Model
{
    use HasFactory , HasFilamentComments;
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'is_published'
    ];

}
