<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey  = 'cat_id';
    protected $fillable = [
        'cat_name',
        'cat_slug',
        'bangla_cat_name',
        'bangla_cat_slug',
        'date',
        'cat_status',
    ];
}
