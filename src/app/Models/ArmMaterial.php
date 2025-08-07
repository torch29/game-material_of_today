<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArmMaterial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'day_of_week',
        'area_id',
        'arm_id',
    ];
}
