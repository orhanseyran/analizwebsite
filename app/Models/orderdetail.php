<?php

namespace App\Models;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderdetail extends Model
{
    protected $table = 'orders_detail';

    protected $fillable = [
        'ürün_id', 'per_price', 'qty', 'sub_total', 'name', 'surname',
        'adress', 'city', 'urun_adı', 'user_id', 'phone', 'email', 'durum',
        'sipariş_takip_no', 'date', 'ordernote', 'döküman', 'işletmeinfo',
        'işletmelogo', 'active', 'is_success', 'Kargo_Takip', 'failed_reason_msg'
    ];

    use HasFactory;

    // protected function schedule(Schedule $schedule)
    // {
    //     // Her dakikada bir çalışacak olan görev
    //     $schedule->call(function () {
    //         // Siparişleri silme işlemi

    //     })->everyMinute();
    // }

}
