<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

// Тип продукта
class Product_type extends Model
{

    protected $fillable = [
        'title_type',
       ];

    public function Product() {
        return $this->hasMany(Product::class);
        }
}
