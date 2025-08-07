<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HiddenPalace extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'area_id',
    ];

    public function can_mine_arm_materials()
    {
        return $this->hasMany(ArmMaterial::class);
    }

    public function can_mine_skill_materials()
    {
        return $this->hasMany(SkillMaterial::class);
    }

    public function placed_area()
    {
        return $this->belongsTo(Area::class);
    }
}
