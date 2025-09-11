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
    ];

        protected $casts = [
        'purchased_at' => 'datetime',  // 👈 important
    ];

    // relation with user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
