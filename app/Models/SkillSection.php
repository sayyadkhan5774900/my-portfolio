<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading_meta',
        'heading',
        'description',
        'skills', // Add this line
        'status',
    ];

    protected $casts = [
        'skills' => 'array', // Add this line
    ];
}
