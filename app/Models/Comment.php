<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

     protected $fillable = [
        'user_id', 
        'product_id', 
        'comment_title', 
        'comment_description', 
        'rating', 
        'rating_points'
    ];

    // Relationship with user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship with product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
