<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'link', 'guid', 'description', 'pubDate', 'user_id', 'category_id'];

    public function path()
    {
        return route('news.show', $this);
    }


}
