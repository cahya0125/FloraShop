<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
// use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $cartItems = Cart::with('produk')->where('id_user', $userId)->get();
        return view('frontend.cart', compact('cartItems'));
    }
    /** 
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $userId = Auth::id();
        $request->validate([
            'id_produk' => 'required|exists:produks,id',
            'quantity' => 'required|integer|min:1',
        ]);
        
        $cartItem = Cart::where('id_user', $userId)
        ->where('id_produk', $request->id_produk)
        ->first();
        
        if ($cartItem) {
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        } else {
            Cart::create([
                'id_user' => $userId,
                'id_produk' => $request->id_produk,
                'quantity' => $request->quantity,
            ]);
        }

        // dd($userId, $request->id_produk, $request->quantity);

        return redirect()->route('cart.index')->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $userId = Auth::id();
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem = Cart::where('id_user', $userId)->where('id', $id)->first();

        if ($cartItem) {
            $cartItem->quantity = $request->quantity;
            $cartItem->save();

            return redirect()->route('cart.index')->with('success', 'Jumlah produk berhasil diupdate.');
        }

        return redirect()->route('cart.index')->with('error', 'Produk tidak ditemukan dalam keranjang.');
    }


    public function remove(Request $request ,$id)
    {
        $userId = Auth::id();
        $cartItem = Cart::where('id_user', $userId)->where('id', $id)->first();

        if ($cartItem) {
            $cartItem->delete();

            return redirect()->route('cart.index')->with('success', 'Produk berhasil dihapus dari keranjang.');
        }

        return redirect()->route('cart.index')->with('error', 'Produk tidak ditemukan dalam keranjang.');
    }
}
