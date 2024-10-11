<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breakingnews extends Model
{
    use HasFactory;
    protected $primaryKey  = 'breakingnews_id';
    protected $fillable = [
        'english_news',
        'bangla_news',
        'status',
    ];
}
