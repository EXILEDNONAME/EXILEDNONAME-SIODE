<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Access;

class User extends Authenticatable {

  use Notifiable;

  protected $fillable = [
    'name',
    'username',
    'password',
    'remember_token',
    'api_token',
    'id_access',
    'email',
    'phone',
    'address_1',
    'address_2',
    'active',
    'status',
    'photo_profile'
  ];

  protected $hidden = [
    'password', 'remember_token',
  ];

  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  public function accesses(){
    return $this->belongsTo(Access::class, 'id_access');
  }

}
