<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $table = 'order'; 

    protected $fillable = ['product_id', 'quantity', 'total_price', 'customer_id'];

    public function customer()
    {
        return $this->belongsTo(Product::class);
    }
}