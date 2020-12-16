<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'age',
        'sex',
        'phone_number',
        'state',
        'city',
        'district',
        'street'
    ];
}
