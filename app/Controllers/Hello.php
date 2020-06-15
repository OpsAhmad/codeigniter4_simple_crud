<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Hello extends Controller
{
    public function index()
    {
        $data['title'] = "Selamat datang di CodeIgniter 4";
        echo view('hello_view', $data);
    }
}
