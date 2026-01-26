<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stock extends Model
{
    /** @use HasFactory<\Database\Factories\StockFactory> */
    use HasFactory;
    protected $fillable = [
        'products_id',
        'amount',
        'cost',
        'last_order',
        'last_restock',
        'min_stock',
        'reason_adjust_min',
        'sales',
    ];

    public $timestamps = true;

    public function product(): BelongsTo
    {   
        return $this->belongsTo(Product::class, 'products_id');
    }
}
