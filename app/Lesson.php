<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model {
  /**
   * @var array
   */
  protected $fillable = [
    'title', 'description'
  ];
  /**
   * @return mixed
   */
  public function attachments() {
    return $this->hasMany("App\Attachment");
  }

}
