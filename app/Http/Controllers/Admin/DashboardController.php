<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('admin-2.layout.dashboard');
    }

    public function index2() {
        return view('admin-2.layout.dashboard');
    }
}
