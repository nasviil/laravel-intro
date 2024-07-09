<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eTanomController extends Controller
{
  public function index()
  {
    $app_name = 'eTanom';

    return view('etanom.index', compact('app_name'));
  }
  public function login()
  {
    $app_name = 'eTanom';

    return view('etanom.login', compact('app_name'));
  }
  public function signup()
  {
    $app_name = 'eTanom';

    return view('etanom.signup', compact('app_name'));
  }
  public function signup_details()
  {
    $app_name = 'eTanom';

    return view('etanom.signup-details', compact('app_name'));
  }
  public function signup_id()
  {
    $app_name = 'eTanom';

    return view('etanom.signup-id', compact('app_name'));
  }
  public function email_login()
  {
    $app_name = 'eTanom';

    return view('etanom.email-login', compact('app_name'));
  }
  public function email_signup()
  {
    $app_name = 'eTanom';

    return view('etanom.email-signup', compact('app_name'));
  }
  public function home_orders()
  {
    $app_name = 'eTanom';

    return view('etanom.pages.home-orders', compact('app_name'));
  }
  public function home_planting()
  {
    $app_name = 'eTanom';

    return view('etanom.pages.home-planting', compact('app_name'));
  }
  public function home_planted()
  {
    $app_name = 'eTanom';

    return view('etanom.pages.home-planted', compact('app_name'));
  }
  public function messages()
  {
    $app_name = 'eTanom';

    return view('etanom.pages.messages', compact('app_name'));
  }
  public function earnings()
  {
    $app_name = 'eTanom';

    return view('etanom.pages.earnings', compact('app_name'));
  }
  public function profile()
  {
    $app_name = 'eTanom';

    return view('etanom.pages.profile', compact('app_name'));
  }
}
