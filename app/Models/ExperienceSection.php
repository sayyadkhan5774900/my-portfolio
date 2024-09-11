<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading_meta',
        'heading',
        'experiences', // Add this line
        'status',
    ];

    protected $casts = [
        'experiences' => 'array', // Add this line
    ];
}
