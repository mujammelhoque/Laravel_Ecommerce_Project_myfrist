<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // protected $table ='categories';
    // public function sub_categories(){    
    //     return $this->hasMany(Category::class);
    // }
    public function type()
{
    return $this->hasOne(Sub_Category::class);
}

}
