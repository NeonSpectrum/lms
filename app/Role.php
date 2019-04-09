<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {
  /**
   * @var array
   */
  protected $fillable = [
    'name'
  ];

  /**
   * @return mixed
   */
  public function users() {
    return $this->hasMany("App\User");
  }
}
