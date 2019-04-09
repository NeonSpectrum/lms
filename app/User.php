<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'role_id', 'username', 'password', 'first_name', 'last_name'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token'
  ];

  /**
   * @param $password
   */
  protected function setPasswordAttribute($password) {
    $this->attributes['password'] = bcrypt($password);
  }

  /**
   * @return mixed
   */
  public function role() {
    return $this->belongsTo("App\Role");
  }
  /**
   * @return mixed
   */
  public function section() {
    return $this->belongsTo("App\Section");
  }

}
