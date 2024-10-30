<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\detail_penjualan as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class detail_penjualan extends Model
{
    use HasFactory;

    protected $fillable =[
        "id_penjualan",
        "id_menu",
        "harga",
        "qty",
        "subtotal",
    ];
}
