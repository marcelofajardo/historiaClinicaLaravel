<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    //RELACIONES

    public function permissions(){
        return $this->belongsToMany(Permission::class)->withTimestamps();
    }
    public function roles(){
    return $this->belongsToMany(Role::class)->withTimestamps();
    }

    //VALIDACIONES
    //si este usuario ya tiene el rol que se envia por defecto enviamos true
    public function has_role($id){
        $encontrado=false;
        foreach ($this->roles as $role){
            if($role->id==$id || $role->slug==$id){
                $encontrado=true;
            }

        }
        return $encontrado;
    }

    public function has_permission($id){
        $encontrado=false;
        foreach ($this->permissions as $permission){
            if($permission->id==$id || $permission->slug==$id){
                $encontrado=true;
            }

        }
        return $encontrado;
    }



}
