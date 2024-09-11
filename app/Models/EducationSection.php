<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading_meta',
        'heading',
        'educations', // Add this line
        'status',
    ];

    protected $casts = [
        'educations' => 'array', // Add this line
    ];
}
