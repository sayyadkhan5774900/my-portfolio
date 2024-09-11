<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CounterSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading_meta',
        'heading',
        'background_image',
        'counters', // Add this line
        'status',
    ];

    protected $casts = [
        'counters' => 'array', // Add this line
    ];
}
