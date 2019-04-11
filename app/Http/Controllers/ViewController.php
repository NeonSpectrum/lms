<?php

namespace App\Http\Controllers;

class ViewController extends Controller {
	public function students() {
		return view('students');
	}

	public function continent($name) {
		$continent = Continent::where('name', $name)->first();
		return view('continent', compact('continent'));
	}

	public function country($name) {
		$country = Country::where('name', $name)->first();
		return view('country', compact('country'));
	}

	public function city($name) {
		$city = City::where('name', $name)->first();
		return view('city', compact('city'));
	}
}
