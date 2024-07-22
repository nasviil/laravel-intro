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
  public function profile_info()
  {
    $app_name = 'eTanom';

    return view('etanom.pages.profile-info', compact('app_name'));
  }
  public function profile_address()
  {
    $app_name = 'eTanom';

    return view('etanom.pages.profile-address', compact('app_name'));
  }
  public function profile_id()
  {
    $app_name = 'eTanom';

    return view('etanom.pages.profile-id', compact('app_name'));
  }
  public function editprofile_info()
  {
    $app_name = 'eTanom';

    return view('etanom.pages.editprofile-info', compact('app_name'));
  }
  public function editprofile_manage()
  {
    $app_name = 'eTanom';

    return view('etanom.pages.editprofile-manage', compact('app_name'));
  }
  public function editprofile_billing()
  {
    $app_name = 'eTanom';

    return view('etanom.pages.editprofile-billing', compact('app_name'));
  }
  public function inventory()
  {
    $app_name = 'eTanom';

    return view('etanom.pages.inventory', compact('app_name'));
  }
}
