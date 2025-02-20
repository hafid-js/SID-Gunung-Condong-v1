<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;


class LapakController extends Controller
{
    public function produk() {
        Session::put('page','lapak-admin');
        return view('admin.lapak.produk');
    }
}
