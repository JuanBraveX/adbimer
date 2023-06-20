<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;
    //use HasRoles;

    protected $table = 'administradores';

    protected $primarykey = 'id';            //Sólo necesario si el nombre de la pk es diferente

    protected $fillable = [
        'name', 
        'email', 
        'password'          //Sólo se colocan los campos rellenables
    ];
}
