<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'area_id',
        'element_id',
        'arm_id',
    ];

    public function belongs_to_area()
    {
        return $this->belongsTo(Area::class);
    }

    public function can_handled_arm()
    {
        return $this->belongsTo(Arm::class);
    }

    public function can_handled_element()
    {
        return $this->belongsTo(Element::class);
    }

    public function using_skill_materials()
    {
        return $this->hasMany(SkillMaterial::class);
    }
}
