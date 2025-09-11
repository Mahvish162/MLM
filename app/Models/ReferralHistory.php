<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferralHistory extends Model
{
    protected $fillable = [
        'from_user_id',
        'to_user_id',
        'to_user_refcode',
        'commission_amount',
        'status',
        'credited_at',
    ];

    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }

    public function toUser()
    {
        return $this->belongsTo(User::class, 'to_user_id');
    }

}
