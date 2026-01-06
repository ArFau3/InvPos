<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    protected $fillable = [
        'nama',
        'barcode',
        'price',
        'thumbnail',
        'foto1',
        'foto2',
        'foto3',
        'discount',
        'categories_id',
        'brands_id',
    ];

    public $timestamps = true;
}
