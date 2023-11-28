<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

// Специализация продукта на опр. животное
class Product_special extends Model
{
    protected $fillable = [
        'title_special',
       ];

    public function Product() {
        return $this->hasMany(Product::class);
        }
}
