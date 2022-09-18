<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'price',
        'compare_price',
        'charge_tax',
        'sale_channel',
        'vendor',
        'tags',
        'images'
    ];

    protected $casts = [
        'sale_channel' => 'array',
        'tags' => 'array'
    ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
