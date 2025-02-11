<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class WebController extends Controller
{
    public function artikel() {
        Session::put('page','artikel');
        return view('admin.web.artikel');
    }
    public function formartikel() {
        Session::put('page','form-artikel');
        return view('admin.web.form_artikel');
    }
    public function kategori() {
        Session::put('page','kategori');
        return view('admin.web.kategori');
    }
    public function subkategori() {
        Session::put('page','sub-kategori');
        return view('admin.web.sub_kategori');
    }
    public function widget() {
        Session::put('page','widget');
        return view('admin.web.widget');
    }
    public function formwidget() {
        Session::put('page','form-widget');
        return view('admin.web.form_widget');
    }
    public function menu() {
        Session::put('page','menu');
        return view('admin.web.menu');
    }
    public function submenu() {
        Session::put('page','sub-menu');
        return view('admin.web.sub_menu');
    }
    public function komentar() {
        Session::put('page','komentar');
        return view('admin.web.komentar');
    }
    public function ubahkomentar() {
        Session::put('page','ubah-komentar');
        return view('admin.web.ubah_komentar');
    }
    public function balaskomentar() {
        Session::put('page','balas-komentar');
        return view('admin.web.balas_komentar');
    }
    public function galeri() {
        Session::put('page','galeri');
        return view('admin.web.galeri');
    }
    public function formgaleri() {
        Session::put('page','form-galeri');
        return view('admin.web.form_galeri');
    }
    public function subgaleri() {
        Session::put('page','sub-galeri');
        return view('admin.web.sub_galeri');
    }
    public function sosmed() {
        Session::put('page','sosmed');
        return view('admin.web.media_sosial');
    }
    public function formsosmed() {
        Session::put('page','form-sosmed');
        return view('admin.web.form_media_sosial');
    }
    public function slider() {
        Session::put('page','slider');
        return view('admin.web.slider');
    }
    public function teksberjalan() {
        Session::put('page','teks-berjalan');
        return view('admin.web.teks_berjalan');
    }
    public function formteksberjalan() {
        Session::put('page','form-teks-berjalan');
        return view('admin.web.form_teks_berjalan');
    }
    public function settingweb() {
        Session::put('page','setting-web');
        return view('admin.web.setting_web');
    }
}
