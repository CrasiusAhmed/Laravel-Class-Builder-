<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title1', 
        'description1',
        'description2',
        'title2',
        'description3', 
        'likes', 
        'comments', 
        'views', 
        'price', 
        'img1', 
        'img2',
        'title_class1', 
        'title_class2', 
        'description_class1', 
        'description_class2', 
        'description_class3', 
        'likes_class', 
        'comments_class', 
        'views_class', 
        'price_class', 
        'img_class1', 
        'img_class2',
        'allow_comments',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
