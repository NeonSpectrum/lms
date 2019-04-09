<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model {
  /**
   * @var array
   */
  protected $fillable = ['filename'];

  /**
   * @return mixed
   */
  public function lessons() {
    return $this->belongsTo("App\Lesson");
  }
}
