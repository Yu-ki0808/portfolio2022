<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_key',
        'user_id',
        'target_body',
        'target_name',
        'menu',
        'target_unit',
        'target_weight',
        'target_set',
        'number',
    ];
}
