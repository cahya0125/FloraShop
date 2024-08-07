<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    public $fillable = ['id', 'nama_produk', 'gambar', 'harga', 'stok', 'deskripsi', 'kategori_id'];

    public $visible = ['id', 'nama_produk', 'gambar', 'harga', 'stok', 'deskripsi', 'kategori_id'];
    public $timestamps = true;

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function deleteImage()
    {
        if ($this->gambar && file_exists(public_path('images/produk/' . $this->gambar))) {
            return unlink(public_path('images/produk/' . $this->gambar));
        }
    }
}
