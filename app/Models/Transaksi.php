<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Order;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'order_id', 'produk_id', 'quantity', 'price'];

    protected $visible = ['id', 'order_id', 'produk_id', 'quantity', 'price'];

    protected $timetamps = true;

    public function Order()
    {
        return $this->belongsTo(App\Models\Order::class, 'order_id');
    }
    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

}
