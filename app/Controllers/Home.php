<?php

namespace App\Controllers;

class Home extends BaseController
{
    // method index
    public function index()
    {
        return view('welcome_message');
    }

    // method coba
    public function coba()
    {
        echo "Hello World!";
    }
}
