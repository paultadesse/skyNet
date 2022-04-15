<?php

namespace App\Models;

use App\Models\Speed;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function speeds()
    {
        return $this->hasMany(Speed::class)->orderBy('birr');
    }
}
