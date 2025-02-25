<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class PendudukController extends Controller
{
    public function penduduk() {
        Session::put('page','penduduk');
        return view('admin-2.penduduk.penduduk');
    }
}
