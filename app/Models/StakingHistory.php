<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StakingHistory extends Model
{
    protected $fillable = [
        'user_id',
        'plan_id',
        'plan_amount',
        'daily_amount',
        'total_credited',
        'credited_at',
    ];

    protected $casts = [
        'credited_at' => 'datetime',
        'created_at'  => 'datetime',
        'updated_at'  => 'datetime',
    ];
}
