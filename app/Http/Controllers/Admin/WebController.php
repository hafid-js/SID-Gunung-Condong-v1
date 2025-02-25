<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class WebController extends Controller
{
    public function test() {
        Session::put('page','test');
        return view('admin.web.test');
    }
    public function artikel() {
        Session::put('page','artikel');
        return view('admin-2.web.artikel');
    }
    public function formartikel() {
        Session::put('page','form-artikel');
        return view('admin-2.web.form_artikel');
    }
    public function kategori() {
        Session::put('page','kategori');
        return view('admin-2.web.kategori');
    }
    public function subkategori() {
        Session::put('page','sub-kategori');
        return view('admin-2.web.sub_kategori');
    }
    public function widget() {
        Session::put('page','widget');
        return view('admin-2.web.widget');
    }
    public function formwidget() {
        Session::put('page','form-widget');
        return view('admin-2.web.form_widget');
    }
    public function menu() {
        Session::put('page','menu');
        return view('admin-2.web.menu');
    }
    public function submenu() {
        Session::put('page','sub-menu');
        return view('admin-2.web.sub_menu');
    }
    public function komentar() {
        Session::put('page','komentar');
        return view('admin-2.web.komentar');
    }
    public function ubahkomentar() {
        Session::put('page','ubah-komentar');
        return view('admin-2.web.ubah_komentar');
    }
    public function balaskomentar() {
        Session::put('page','balas-komentar');
        return view('admin-2.web.balas_komentar');
    }
    public function galeri() {
        Session::put('page','galeri');
        return view('admin-2.web.galeri');
    }
    public function formgaleri() {
        Session::put('page','form-galeri');
        return view('admin-2.web.form_galeri');
    }
    public function subgaleri() {
        Session::put('page','sub-galeri');
        return view('admin-2.web.sub_galeri');
    }
    public function sosmed() {
        Session::put('page','sosmed');
        return view('admin-2.web.media_sosial');
    }
    public function formsosmed() {
        Session::put('page','form-sosmed');
        return view('admin-2.web.form_media_sosial');
    }
    public function slider() {
        Session::put('page','slider');
        return view('admin-2.web.slider');
    }
    public function teksberjalan() {
        Session::put('page','teks-berjalan');
        return view('admin-2.web.teks_berjalan');
    }
    public function formteksberjalan() {
        Session::put('page','form-teks-berjalan');
        return view('admin-2.web.form_teks_berjalan');
    }
    public function settingweb() {
        Session::put('page','setting-web');
        return view('admin-2.web.setting_web');
    }
    public function pembangunan() {
        Session::put('page','pembangunan');
        return view('admin-2.web.pembangunan');
    }
    public function formpembangunan() {
        Session::put('page','form-pembangunan');
        return view('admin-2.web.form_pembangunan');
    }
    public function dokumentasipembangunan() {
        Session::put('page','dokumentasi-pembangunan');
        return view('admin-2.web.dokumentasi_pembangunan');
    }
    public function formdokumentasipembangunan() {
        Session::put('page','form-pembangunan');
        return view('admin-2.web.form_dokumentasi_pembangunan');
    }
}
