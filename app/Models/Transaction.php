<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // User one-to-many relationship with Transaction
    public function User() {
        return $this->belongsTo(User::class);
    }

    // Transaction many-to-many relationship with Product
    public function Products() {
        return $this->belongsToMany(Product::class);
    }
}
