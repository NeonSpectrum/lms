<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model {
	protected $fillable = [
		'name',
	];
	public function subjects() {
		return $this->hasMany("App\Subject");
	}
}
