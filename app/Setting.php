<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {
  /**
   * @var mixed
   */
  public $timestamps = false;

  /**
   * @var array
   */
  protected $fillable = ['key', 'value'];
}
