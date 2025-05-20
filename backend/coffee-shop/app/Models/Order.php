<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'table_number',
        'items',
        'total',
        'paid',
    ];

    protected $casts = [
        'items' => 'array',
        'paid' => 'boolean',
    ];
}
