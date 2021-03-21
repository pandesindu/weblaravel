<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'ini beranda admin';
        $data = [
            'nim' => '11625424'
        ];
        return view('admin/beranda', compact('title', 'data'));
    }

    public function beranda()
    {
        $title = 'Data Dasboard';

        return view('admin/analysis', compact('title'));
    }
}