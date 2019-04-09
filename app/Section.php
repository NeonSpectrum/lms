<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model {
  /**
   * @var array
   */
  protected $fillable = [
    'name'
  ];
  /**
   * @return mixed
   */
  public function subjects() {
    return $this->belongsToMany("App\Subject");
  }

  /**
   * @return mixed
   */
  public function users() {
    return $this->hasMany("App\User");
  }
}
