<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Product_special;
use App\Models\Product_type;
use App\Models\Sell;



// Продукт
class Product extends Model
{
    protected $fillable = [
        'title',
        'article',
        'photo',
        'product_quantity',
        'product_purpose',
        'cost',
        'product_type_id',
        'product_special_id',
       ];

       public function user() {
        return $this->belongsTo(User::class);
        }

        public function Product_special() {
            return $this->hasMnay(Product_special::class);
            }

        public function Product_type() {
            return $this->belongsTo(Product_type::class);
            }

            public function Sell() {
                return $this->belongsTo(Sell::class);
                }
}
