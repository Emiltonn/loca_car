<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';
    public $timestamps = true;

    protected $casts = [
        'account_balance' => 'float',
        'value' => 'float'
    ];

    protected $fillable = [
        'description',
        'value',
        'dt_transaction',
        'type_transaction',
        'done',
        'car_id',
        'client_id',
        'account_id'
    ];

    public function car_transactions()
    {
        return $this->hasmany(Transaction::class, 'car_id');
    }

    public function client_transactions()
    {
        return $this->hasmany(Transaction::class, 'client_id');
    }
    
    public function account_transactions()
    {
        return $this->hasmany(Transaction::class, 'account_id');
    }
}
