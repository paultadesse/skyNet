<?php

namespace App\Models;

use App\Models\ServiceType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speed extends Model
{
    use HasFactory;

    protected $fillable = [
        'speed', 'birr'
    ];

    public function serviceType() 
    {
        return $this->belongsTo(ServiceType::class);
    }
}
