<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading_meta',
        'heading',
        'description',
        'services', // Add this line
        'hire_heading',
        'hire_button_text',
        'hire_button_link',
        'status',
    ];

    protected $casts = [
        'services' => 'array', // Add this line
    ];
}
