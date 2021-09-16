<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
           
            'name','desc','sku', 'title','image','category_id','subcategory_id',
            'inventory_id',
            'price','oldprice' ,'discount_id'
    ];
}
