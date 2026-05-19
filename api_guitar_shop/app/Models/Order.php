<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'guitar_id',
        'quantity',
        'user_name',
        'phone',
        'address',
        'notes',
        'voucher_code',
        'total_price'
    ];

    protected $casts = [
        'guitar_id' => 'integer',
        'quantity' => 'integer',
        'total_price' => 'decimal:2',
    ];

    public function guitar()
    {
        return $this->belongsTo(Allitem::class, 'guitar_id');
    }
}