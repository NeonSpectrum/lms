<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller {
  /**
   * @param Request $request
   */
  public function login(Request $request) {
    if (Auth::attempt($request->only(['username', 'password']))) {
      return response()->json(['success' => true, 'message' => 'Login Successfully!']);
    }
    return response()->json(['success' => false, 'message' => 'Invalid Username and/or Password.']);
  }

  /**
   * @param Request $request
   */
  public function register(Request $request) {
    $user = new User;
    $user->fill($request->only(['username', 'password']));

    if ($user->save()) {
      return response()->json(['success' => true, 'message' => 'Registered Successfully!']);
    }
    return response()->json(['success' => false, 'message' => 'Already Registered.']);
  }

  /**
   * @param Request $request
   */
  public function logout(Request $request) {
    Auth::logout();

    return redirect('/');
  }
}
