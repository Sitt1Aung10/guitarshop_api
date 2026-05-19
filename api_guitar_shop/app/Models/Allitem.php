<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Allitem extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'brandname',
        'size',
        'price',
        'color',
        'serial_number',
        'image'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'serial_number' => 'string',

    ];

    protected $appends = [
        'image_url',
    ];

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        }
        return null;
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'guitar_id');
    }
}
