<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SampleDrip extends Model
{
    use HasFactory;
    protected $sampledrip;
    protected $fillable = [
        'sample_name'
    ];
}
