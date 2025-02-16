<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;


class InfoDesaController extends Controller
{
    public function identitasdesa() {
        Session::put('page','identitas-desa');
        return view('admin.info-desa.identitas_desa');
    }
    public function formidentitasdesa() {
        Session::put('page','form-identitas-desa');
        return view('admin.info-desa.form_identitas_desa');
    }
}
