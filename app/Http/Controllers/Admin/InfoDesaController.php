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
    public function petawilayahdesa() {
        Session::put('page','peta-wilayah-desa');
        return view('admin.info-desa.peta_wilayah_desa');
    }
    public function petakantordesa() {
        Session::put('page','peta-kantor-desa');
        return view('admin.info-desa.peta_kantor_desa');
    }
}
