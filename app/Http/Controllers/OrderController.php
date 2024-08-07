<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Tampilkan halaman checkout dengan item keranjang
        $cart = Cart::where('user_id', auth()->id())->first();
        return view('checkout.index', ['cart' => $cart]);
    }

    // proses checkout
    public function process(Request $request)
    {
        // Proses checkout (misalnya, membuat pesanan, mengurangi stok, dll.)
        $cart = Cart::where('user_id', auth()->id())->first();

        // Misalnya, buat pesanan baru
        // $order = Order::create([...]);

        // Hapus keranjang setelah checkout berhasil
        $cart->delete();

        return redirect()->route('home')->with('success', 'Checkout berhasil!');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
