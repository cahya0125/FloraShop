<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Transaksi;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;

class CheckOutController extends Controller
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
        $total = 0;
        $carts = Cart::with('produk')->where('id_user', Auth::id())->get();
        foreach ($carts as $cart) {
            $subTotal = $cart->quantity * $cart->produk->harga;
            $total += $subTotal;
        }
        return view('frontEnd.checkout', compact('carts','total'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function order(Request $request)
    {
        $request->validate([
            'alamat' => 'required|string|max:255',
            'kota' => 'required|string|max:255',
            'kode_pos' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            // 'payment_method' => 'required|string|max:50',
        ]);

        $total = 0;
        $carts = Cart::with('produk')->where('id_user', Auth::id())->get();

        foreach ($carts as $cart) {
            $total += $cart->quantity * $cart->produk->harga;
        }
        $userId= Auth::id();
        $order = Order::create([
            'user_id' => $userId,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'kode_pos' => $request->kode_pos,
            'phone' => $request->phone,
            'email' => $request->email,
            // 'payment_method' => $request->payment_method,
            'total' => $total
        ]);

        foreach ($carts as $cart) {
            Transaksi::create([
                'order_id' => $order->id,
                'produk_id' => $cart->id_produk,
                'quantity' => $cart->quantity,
                'price' => $cart->produk->harga,
            ]);
            $produk = Produk::findOrFail($cart->id_produk);
            $produk->stok = $cart->produk->stok - $cart->quantity;
            $produk->save();
            $cart->delete();
        }

        return redirect()->route('frontEnd.index')->with('success', 'Order berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
