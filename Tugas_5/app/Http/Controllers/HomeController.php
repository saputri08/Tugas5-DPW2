<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class HomeController extends Controller{


    function showBeranda(){
        return view('beranda');
    }
    
    function showIndex(){
        $data['list_produk'] = Produk::all();
        return view('index', $data);
    }
    function showProduk(){
        return view('produk');
    }

    function showKategori(){
    return view('kategori');
    }

    function showContact(){
        return view('contact');
        }

}