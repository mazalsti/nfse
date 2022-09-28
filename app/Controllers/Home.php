<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        $array = array('error' => 'error');
        return view('welcome_message', $array);
    }
}
