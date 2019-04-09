<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    $data = [
      ['name' => 'admin'],
      ['name' => 'instructor'],
      ['name' => 'student']
    ];

    foreach ($data as $row) {
      Role::updateOrCreate($row);
    }
  }
}
