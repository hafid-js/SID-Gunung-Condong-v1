<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function artikel() {
        return view('admin.web.artikel');
    }
    public function formartikel() {
        return view('admin.web.form_artikel');
    }
    public function kategori() {
        return view('admin.web.kategori');
    }
    public function kategorisub() {
        return view('admin.web.sub_kategori');
    }
    public function widget() {
        return view('admin.web.widget');
    }
    public function formwidget() {
        return view('admin.web.form_widget');
    }
    public function menu() {
        return view('admin.web.menu');
    }
    public function submenu() {
        return view('admin.web.sub_menu');
    }
    public function komentar() {
        return view('admin.web.komentar');
    }
    public function ubahkomentar() {
        return view('admin.web.ubah_komentar');
    }
    public function balaskomentar() {
        return view('admin.web.balas_komentar');
    }
    public function galeri() {
        return view('admin.web.galeri');
    }
    public function formgaleri() {
        return view('admin.web.form_galeri');
    }
    public function subgaleri() {
        return view('admin.web.sub_galeri');
    }
    public function sosmed() {
        return view('admin.web.media_sosial');
    }
    public function formsosmed() {
        return view('admin.web.form_media_sosial');
    }
    public function slider() {
        return view('admin.web.slider');
    }
    public function teksberjalan() {
        return view('admin.web.teks_berjalan');
    }
    public function formteksberjalan() {
        return view('admin.web.form_teks_berjalan');
    }
    public function settingweb() {
        return view('admin.web.setting_web');
    }
}
