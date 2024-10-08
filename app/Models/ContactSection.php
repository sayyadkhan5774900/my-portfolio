<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading_meta',
        'heading',
        'email',
        'address',
        'phone',
        'status',
    ];
}
