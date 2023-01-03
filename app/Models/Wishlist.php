<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wishlist extends Model
{
    use HasFactory;
    public $guarded = ['id'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_code');
    }
}
