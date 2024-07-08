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
  public function dashboard_orders()
  {
    $app_name = 'eTanom';

    return view('etanom.dashboard-orders', compact('app_name'));
  }
  public function dashboard_planting()
  {
    $app_name = 'eTanom';

    return view('etanom.dashboard-planting', compact('app_name'));
  }
  public function dashboard_planted()
  {
    $app_name = 'eTanom';

    return view('etanom.dashboard-planted', compact('app_name'));
  }
}
