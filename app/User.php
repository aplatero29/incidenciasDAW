<?php

namespace App;

use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public $timestamps = false;
    
    protected $table = 'profesores';
    protected $primaryKey = 'id_prof';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'dni', 'correo', 'usuario', 'contrasena', 'departamento', 'admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function incidencias(){
        return $this->hasMany('App\Incidencia');
    }

    public function logs(){
        return $this->hasMany('App\Log');
    }
    
    /*public function setPasswordAttribute($password)
    {
        var_dump($password);
        die();
        $this->attributes['password'] = \Hash::make($password);
    }*/
}
