<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use WireComments\Traits\Commentable;

class Article extends Model
{
    use HasFactory;
    use Commentable;

    protected $fillable = [
        'title',
        'content',
        'slug',
        'media_id'
    ];
}
