<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model

{
    protected $table = 'articles';
    protected $fillable = ['title', 'article_text'];

    public function tag()
    {
        return $this->belongsToMany(Tag::class, 'article_tag');
    }
}
