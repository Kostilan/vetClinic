<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;
use App\Models\User;

// Продажи
class Sell extends Model
{
    protected $fillable = [
        'product_id',
        'user_id',
        'profit',
        'quantity',
       ];

       public function Product() {
        return $this->hasMany(Product::class);
        }

        public function User() {
            return $this->belongsTo(User::class);
            }

}
