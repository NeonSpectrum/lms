<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model {
	public function lessons() {
		return $this->belongsTo("App\Roles");
	}}
