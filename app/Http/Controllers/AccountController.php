<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Redirect;
use Socialize;
class AccountController extends Controller {

  // To redirect github
  public function github_redirect() {
    return Socialize::with('github')->redirect();
  }
  // to get authenticate user data
  public function github() {
    $user = Socialize::with('github')->user();
    // Do your stuff with user data.
    //print_r($user);die;
      return view('pages.index',compact('user'));
  }

}
