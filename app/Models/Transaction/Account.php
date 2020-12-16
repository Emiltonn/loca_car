<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'accounts';
    public $timestamps = true;

    protected $casts = [
        'balance' => 'float'
    ];

    protected $fillable = [
        'balance',
        'user_id'
    ];

    public function user_account()
    {
        return $this->hasOne(Account::class, 'user_id');
    }
}
