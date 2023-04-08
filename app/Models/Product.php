<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Transaction many-to-many relationship with Product
    public function hasTransaction() {
        return $this->belongsToMany(Transaction::class);
    }

    // Product One-To-Many relationship with Size
    public function hasSize() {
        return $this->hasMany(Size::class);
    }
}
