<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImitateController extends Controller
{
    public function index()
    {
        return view('imitate.index');
    }

    public function spotify()
    {
        $app_name = 'Spotify';

        return view('imitate.spotify', compact('app_name'));
    }
    public function discord()
    {
        $app_name = 'Discord';

        return view('imitate.discord', compact('app_name'));
    }
}
