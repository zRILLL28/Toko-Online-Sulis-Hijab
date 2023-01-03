<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    public $guarded = ['id'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_code');
    }
    public function data_user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
