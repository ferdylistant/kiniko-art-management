<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisionMission extends Model
{
    use HasFactory;

    protected $table = 'visions_missions';
    protected $fillable = [
        'type', // 'vision' or 'mission'
        'description',
    ];
}