<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    public $fillable = ['id', 'nama_kategori', 'deskripsi'];

    public $visible = ['id', 'nama_kategori', 'deskripsi'];
    public $timestamps = true;

    public function produk()
    {
        return $this->hasMany(Produk::class, 'produk_id');
    }
}
