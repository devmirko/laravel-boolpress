<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
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

    //  nascondiamo questi dati per evitare che vadano a finire nel front-end
    protected $hidden = [
        'password', 'remember_token', 'id', 'email', 'email_verified_at', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userDetails() {
        return $this->hasOne('App\Models\UserDetails'); // nella tabella che non ha il foreign key
    }

    public function posts() {
        return $this->hasMany('App\Models\Post');
    }
}
