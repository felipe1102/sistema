<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nome', 'email', 'senha',
    ];

    protected $hidden = [
        'senha', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
