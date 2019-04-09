<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model {
  /**
   * @var array
   */
  protected $fillable = [
    'name'
  ];
  /**
   * @return mixed
   */
  public function sections() {
    return $this->hasMany("App\Section");
  }
}
