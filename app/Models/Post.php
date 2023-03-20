<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image_url',
        'is_published',
        'category_id',
        'user_id',
        'published_at'
    ];

    // Relacion user a muchos posts inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    // Un post puede tener muchas etiquetas
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
