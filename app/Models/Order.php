<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function products () {

       return $this->belongsToMany(Product::class,'orders_has_products')
       ->withPivot('amount')
       ->withTimestamps();

    }

    
    public function categories () {
        return $this->belongsToMany(Category::class,'products_has_categories');
     }


}
