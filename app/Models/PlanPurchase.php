<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanPurchase extends Model
{
    protected $fillable = [
        'user_id',
        'plan_amount',
        'status',
        'purchased_at',
        'activated_at',   // 👈 new field
    ];

    protected $casts = [
        'purchased_at' => 'datetime',
        'activated_at' => 'datetime',  // 👈 cast added
    ];

    // relation with user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
