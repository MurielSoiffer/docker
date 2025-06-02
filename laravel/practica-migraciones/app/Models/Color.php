<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\ColorFactory;

class Color extends Model
{
    use HasFactory;

    protected $table = 'colores'; 

    protected static function newFactory()
    {
    return ColorFactory::new();
    }

    protected $fillable = [
        'color',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

