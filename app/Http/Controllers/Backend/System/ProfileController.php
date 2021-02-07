<?php

namespace App\Http\Controllers\Backend\System;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;

class ProfileController extends Controller {

  /**
  **************************************************
  * @return Authentication
  **************************************************
  **/

  public function __construct() {
    $this->middleware('auth');
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function index() {
    $data = User::where('username', Auth::user()->username)->first();
    return redirect('/dashboard/profile/timeline');
  }

  public function update(Request $request, $id) {
    $user = User::findOrFail($id);
    $user->name = $request->get('name');
    $user->email = $request->get('email');
    $user->save();
    return redirect('/dashboard/profile/personal-information');
}

  /**
  **************************************************
  * @return Blank
  **************************************************
  **/

  public function blank() {
    $data = User::where('username', Auth::User()->username)->first();
    return redirect('/dashboard/profile/' . $data->username . '/timeline');
  }

  public function timeline() {
    $data = User::where('username', Auth::User()->username)->first();
    return view('pages.backend.system.profile.timeline', compact('data'));
  }

  public function personal_information() {
    $data = User::where('username', Auth::User()->username)->first();
    return view('pages.backend.system.profile.personal-information', compact('data'));
  }

  public function password() {
    $data = User::where('username', Auth::User()->username)->first();
    return view('pages.backend.system.profile.password', compact('data'));
  }

  public function change_password(Request $request){

    if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
      return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
    }

    if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
      return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
    }

    if(!(strcmp($request->get('new-password'), $request->get('new-password-confirm'))) == 0){
      return redirect()->back()->with("error","New Password should be same as your confirmed password. Please retype new password.");
    }

    $user = Auth::user();
    $user->password = bcrypt($request->get('new-password'));
    $user->save();

    return redirect()->back()->with("success","Password changed successfully !");

  }

}
