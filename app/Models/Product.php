<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Transaction many-to-many relationship with Product
    public function Transactions() {
        return $this->belongsToMany(Transaction::class); 
    }

    // Product One-To-One relationship with Size
    public function Size() {
        return $this->hasOne(Size::class);
    }
}
