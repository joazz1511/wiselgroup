<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingOrder extends Model
{
    use HasFactory;

    protected $table = 'booking_order';
    protected $primaryKey = 'ORDER_ID';

    public $timestamps = false;

    protected $fillable = [
        'PIC_NAME',
        'EMAIL',
        'PHONE',
        'ALAMAT',
        'TANGGAL_SERVICE',
        'STATUS',
        'REMARK',
        'PRODUCT_NAME',
        'NOTE',
        'QUANTITY',
        'PRODUCT_TYPE_SERVICE_NAME'
    ];

    protected $casts = [
        'TANGGAL_SERVICE' => 'datetime',
        'QUANTITY' => 'integer',
    ];

    protected $attributes = [
        'STATUS' => 'pending',
    ];
}