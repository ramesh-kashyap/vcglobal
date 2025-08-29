<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        return view('main.home');
    }

    public function about()
    {
        return view('main.about');
    }

    public function services()
    {
        return view('main.services');
    }

    public function contact()
    {
        return view('main.contact');
    }
    public function privacy()
    {
        return view('main.privacy');
    } 
   
    public function markets()
    {
        return view('main.markets');
    }
        public function education()
    {
        return view('main.education');
    }
        public function support()
    {
        return view('main.support');
    }

    public function team()
    {
        return view('main.team');
    }
    public function termcandition()
    {
        return view('main.term-candition');
    }

    public function plan()
    {
        return view('main.plan');
    }



}
