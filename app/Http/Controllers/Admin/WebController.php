<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function artikel() {
        return view('admin.web.artikel');
    }
    public function form() {
        return view('admin.web.form');
    }
    public function kategori() {
        return view('admin.web.kategori');
    }
    public function subkategori() {
        return view('admin.web.sub_kategori');
    }
    public function widget() {
        return view('admin.web.widget');
    }
    public function menu() {
        return view('admin.web.menu');
    }
}
