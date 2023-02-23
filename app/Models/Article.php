<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body'];

    public function path()
    {
        return route('articles.show', $this);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id')->withDefault([
            'name' => 'Guest Author'
        ]);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    static function attributeNames()
    {
        return [
            'title' => '"Заголовок"',
            'excerpt' => '"Краткое содержание"',
            'body' => '"Текст новости"',
            'tags' => '"Тэги"'
        ];
    }
}
