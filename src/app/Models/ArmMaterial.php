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
        'hidden_palace_id',
        'arm_id',
    ];

    public function mined_hidden_palace()
    {
        return $this->belongsTo(HiddenPalace::class);
    }

    public function original_arm()
    {
        return $this->belongsTo(Arm::class);
    }
}
