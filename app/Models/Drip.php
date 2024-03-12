<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drip extends Model
{
    use HasFactory;

    protected $drip;

    protected $fillable = [
        'plan_height',
        'num_leaves',
        'steam_diamter',
        'mortality_rate',
        'leaf_color',
        'lead_weight',
        'weight_fruit',
        'root_lenght'
    ];
}
