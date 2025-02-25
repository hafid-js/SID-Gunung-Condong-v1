<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;


class PembangunanController extends Controller
{
    public function pembangunan() {
        Session::put('page','pembangunan');
        return view('admin-2.pembangunan.pembangunan');
    }
    public function formpembangunan() {
        Session::put('page','form-pembangunan');
        return view('admin-2.pembangunan.form_pembangunan');
    }
    public function dokumentasipembangunan() {
        Session::put('page','dokumentasi-pembangunan');
        return view('admin-2.pembangunan.dokumentasi_pembangunan');
    }
    public function formdokumentasipembangunan() {
        Session::put('page','form-pembangunan');
        return view('admin-2.pembangunan.form_dokumentasi_pembangunan');
    }
}
