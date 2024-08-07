<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::orderBy('id', 'desc')->get();
        return view('admin.kategori.index', compact('kategori')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required|max:255',
            'deskripsi' => 'required',
        ]);

        $kategori = new Kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->deskripsi = $request->deskripsi;
        $kategori->save();

        return redirect()->route('kategori.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('admin.kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('admin.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required|max:255',
            'deskripsi' => 'required',
        ]);

        $kategori = Kategori::findorFail($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->deskripsi = $request->deskripsi;
        $kategori->save();

        return redirect()->route('kategori.index')
            ->with('success', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->route('kategori.index')
            ->with('success', 'data berhasil dihapus');
    }
}
