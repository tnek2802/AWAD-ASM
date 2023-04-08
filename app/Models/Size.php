<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    // Product one-to-many relationship with Size
    public function hasProduct() {
        return $this->belongsTo(Product::class);
    }
}
