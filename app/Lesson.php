<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model {
	protected $fillable = [
		'title', 'description',
	];
	public function attachments() {
		return $this->hasMany("App\Attachment");
	}

}
