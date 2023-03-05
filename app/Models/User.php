<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // User one-to-many relationship with transaction
    public function hasTransaction() {
        return $this->hasMany(Transaction::class);
    }

}
