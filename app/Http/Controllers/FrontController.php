<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class FrontController extends Controller
{
   // tampilan index
    public function index()
    {
      $produk = Produk::all();
       return view('frontEnd.index', compact('produk')); 
    }
   //  tampilan shop
    public function shop()
    {
      $produk = Produk::all();
      $Kategori = Kategori::all();
      return view('frontEnd.shop', compact('produk','Kategori')); 
    }
   //  tampilan kategori
    public function kategori($id)
    {
        $produk = Produk::where('kategori_id', $id)->get();
        $kategori = Kategori::all();
        return view('frontEnd.kategori', compact('produk', 'kategori'));
    }
    public function detail($id)
    {
      $produk = Produk::findOrFail($id);
      return view('frontend.detail',compact('produk'));
    }
   //  tampilan checkout
    public function checko1ut()
    {
       return view('frontend.checkout'); 
    }
   //  tampilan kontak
    public function kontak()
    {
       return view('frontend.contact'); 
    }
  
    public function wishlist()
    {
      return view('frontend.wishlist'); 
    }
    public function about()
    {
      return view('frontend.about'); 
    }
}
