<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrupController extends Controller
{
    public function index() {
        return view('admin.pengguna.grup.index');
    }

    public function view() {
        return view('admin.pengguna.grup.view');
    }

}
