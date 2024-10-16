<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adds extends Model
{
    use HasFactory;
    protected $primaryKey  = 'add_id';
    protected $fillable = [
        'add_link',
        'add_image',
        'add_status',
    ];
}
