<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    $data = [
      ['key' => 'title', 'value' => 'Learning Management System']
    ];

    foreach ($data as $row) {
      Setting::create($row);
    }
  }
}
