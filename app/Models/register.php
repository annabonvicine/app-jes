<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class register extends Authenticatable
{
    use HasFactory;
    protected $table = 'registers';
    protected $fillable = [
        'first_name',
        'last_name',
        'cpf',
        'date_of_birth',
        'email',
        'password',
        'ddd_phone',
        'phone_number',
        'addres_street',
        'addres_number',
        'village',
        'city',
        'state',
        'zip_code',
        'country',
    ];

protected $hidden = [
    'password',
];

protected $casts = [
    'password' => 'hashed',
];

}
