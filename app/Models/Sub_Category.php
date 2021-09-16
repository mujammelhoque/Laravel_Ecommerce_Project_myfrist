<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Category extends Model
{
    use HasFactory;
    // protected $table ='sub__categories';
    // public function category(){
    //     return $this->belongsTo(Category::class);
    // }

    public function user()
{
    return $this->belongsTo(Category::class);
}
    }
