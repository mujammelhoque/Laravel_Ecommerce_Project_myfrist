<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'desc',
        'image1',
        'image2',
        'image3',
       'status'
    ];
}
