<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function hello(){

        $first_name = 'KEnt';
        $last_name = 'B';
        $greeting = 'Bayola';
    
        return view('index', compact('greeting', 'first_name', 'last_name'));
    }

    public function about(){

        return view('pages.about');
    }

    public function contact(){

        return view('pages.contact');
    }
    public function faq(){

        return view('pages.faq');
    }
    public function email(){

        return view('pages.email');
    }
    public function ibotika(){

        return view('pages.ibotika');
    }
}
