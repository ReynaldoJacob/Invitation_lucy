<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    protected $fillable = [
        'family_name',
        'link_id',
        'contact_name',
        'attending',
        'guest_count',
    ];

    protected $casts = [
        'attending' => 'boolean',
        'guest_count' => 'integer',
    ];
}

