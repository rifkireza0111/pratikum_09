<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            'nama' => 'Rifki Reza Pratama',
            'nim' => '011012354',
            'programStudi' => 'Sistem Informasi',
            'tahunAngkatan' => '2023'
        ]);
    }
}