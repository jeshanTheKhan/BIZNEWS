<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $primaryKey  = 'news_id';
    protected $fillable = [
        'english_title',
        'english_title_slug',
        'bangla_title',
        'bangla_title_slug',
        'one_subtitle_english',
        'one_subtitle_bangla',
        'two_subtitle_english',
        'two_subtitle_bangla',
        'news_category',
        'date',
        'one_english_description',
        'one_bangla_description',
        'two_english_description',
        'two_bangla_description',
        'three_english_description',
        'three_bangla_description',
        'image1',
        'image2',
        'image3',
        'hero',
        'category',
        'feather',
        'status',
    ];
}
