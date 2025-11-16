<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'sender_id',
        'recipient_id',
        'amount',
        'currency',
        'transaction_type',
        'status',
        'risk_score',
        'risk_action',
        'transaction_hour',
        'description',
    ];
}
