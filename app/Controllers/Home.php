<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
        
    }

    public function comment(){
        echo 'Sup Dog';
    }

    public function loginRoute(){
        return view('login');
    }

    public function signupRoute(){
        return view('signup');
    }

    public function dashboardRoute(){
        return view('dashboard');
    }
}
