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
    public function dusun() {
        Session::put('page','dusun');
        return view('admin.info-desa.dusun');
    }
    public function formdusun() {
        Session::put('page','form-dusun');
        return view('admin.info-desa.form_dusun');
    }
    public function rw() {
        Session::put('page','rw');
        return view('admin.info-desa.rw');
    }
    public function cetakdatarw() {
        return view('admin.info-desa.cetak_data_rw');
    }
    public function formrw() {
        Session::put('page','form-rw');
        return view('admin.info-desa.form_rw');
    }
    public function rt() {
        Session::put('page','rt');
        return view('admin.info-desa.rt');
    }
    public function cetakdatart() {
        return view('admin.info-desa.cetak_data_rt');
    }
    public function formrt() {
        Session::put('page','form-rt');
        return view('admin.info-desa.form_rt');
    }
    public function lembagadesa() {
        Session::put('page','lembaga-desa');
        return view('admin.info-desa.lembaga_desa');
    }
    public function detaillembagadesa() {
        Session::put('page','detail-lembaga-desa');
        return view('admin.info-desa.detail_lembaga_desa');
    }
    public function kategorilembaga() {
        Session::put('page','kategori-lembaga');
        return view('admin.info-desa.kategori_lembaga');
    }
    public function formkategorilembaga() {
        Session::put('page','form-kategori-lembaga');
        return view('admin.info-desa.form_kategori_lembaga');
    }
    public function formlembagadesa() {
        Session::put('page','form-lembaga-desa');
        return view('admin.info-desa.form_lembaga_desa');
    }
    public function formanggotalembaga() {
        Session::put('page','form-anggota-lembaga');
        return view('admin.info-desa.form_anggota_lembaga');
    }
}
