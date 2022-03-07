<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethodModel extends Model
{
    use HasFactory;
    protected $table = 'phuong_thuc_thanh_toan';

    public $timestamps = false;

    public $primaryKey = 'maPTTT';
}
