<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherDetailReceiptModel extends Model
{
    use HasFactory;
    protected $table = "voucher_hoa_don_chi_tiet";

    public $timestamps = false;

    public $primaryKey = "maVHDCT";
}
