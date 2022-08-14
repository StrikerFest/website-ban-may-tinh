<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVoucherModel extends Model
{
    use HasFactory;
    protected $table = 'san_pham_voucher';

    public $timestamps = false;

    public $primaryKey = 'maSPV';
}
