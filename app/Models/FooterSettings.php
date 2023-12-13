<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterSettings extends Model
{
    use HasFactory;

    protected $fillable = ['address', 'phone_number', 'email', 'social_links'];

    protected $casts = ['social_links' => 'array'];
}
