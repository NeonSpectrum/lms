<?php
use App\Setting;

/**
 * @param $key
 */
function setting($key) {
	return Setting::where('key', $key)->first()->value ?? '';
}
function active($url) {
	return request()->is($url) ? 'active' : '';
}
function activeCaret($url) {
	return request()->is($url) ? '<i class="fa fa-caret-right sidenav-icons"></i>' : '';
}