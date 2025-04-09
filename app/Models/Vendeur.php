<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Vendeur extends Model
{
     use HasFactory;

    protected $fillable = [
        'owner',
        'business',
        'phone',
        'email',
        'street',
        'city',
        'postal_code',
        'password',
        'activity',
        'days_open',
        // 'pickup_hours',
        'photo',
    ];

    protected $casts = [
        'days_open' => 'array',
        // 'pickup_hours' => 'array',
    ];
}


