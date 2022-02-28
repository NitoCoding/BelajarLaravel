<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_transaksi_item',
        'id_menu',
        'jumlah',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_transaksi_item' => 'integer',
        'id_menu' => 'integer',
    ];

    public function idTransaksiItem()
    {
        return $this->belongsTo(TransaksiItem::class);
    }

    public function idMenu()
    {
        return $this->belongsTo(Menu::class);
    }
}
