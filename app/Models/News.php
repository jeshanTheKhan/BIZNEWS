<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $primaryKey  = 'news_id';
    protected $fillable = [
        "english_title",
        "bangla_title",
        "english_body",
        "bangla_body",
        "image",
        'hero',
        'category',
        'feather',
        'status',
    ];

    public function category(){
        return $this->hasOne(Category::class, 'cat_id', 'news_cat');
    }
    
}
