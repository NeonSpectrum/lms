<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectSectionsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('subject_sections', function (Blueprint $table) {
			$table->unsignedInteger('subject_id');
			$table->foreign('subject_id')->references('id')->on('subjects');
			$table->unsignedInteger('section_id');
			$table->foreign('section_id')->references('id')->on('sections');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('subject_sections');
	}
}
