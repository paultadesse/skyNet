<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'phone_number', 'email', 'service_type', 'desired_speed', 'site_location',
        'site_location_not_listed', 'comment'
    ];
}
