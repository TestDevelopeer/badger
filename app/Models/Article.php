<?php

namespace App\Models;

use App\Traits\HasAuthor;
use App\Traits\ModelHelpers;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasAuthor, ModelHelpers;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'author_id',
    ];
}
