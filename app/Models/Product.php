<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $primaryKey = 'product_code', $fillable = ['product_code', 'product_name', 'image', 'stock', 'price', 'merk', 'description'];
}
