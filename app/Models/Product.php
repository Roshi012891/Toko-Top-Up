<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Pastikan kolom-kolom ini terdaftar di sini
    protected $fillable = ['name', 'category', 'price'];
}