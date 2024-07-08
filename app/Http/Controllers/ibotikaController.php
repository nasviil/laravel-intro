<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ibotikaController extends Controller
{
  public function index()
  {
    return view('ibotika.index');
  }
}
