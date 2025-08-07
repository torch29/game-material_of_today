<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arm extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
    ];

    public function arm_materials()
    {
        return $this->hasMany(ArmMaterial::class);
    }

    public function using_characters()
    {
        return $this->hasMany(Character::class);
    }
}
