<?php
use App\Setting;

/**
 * @param $key
 */
function setting($key) {
  return Setting::where('key', $key)->first()->value ?? '';
}
