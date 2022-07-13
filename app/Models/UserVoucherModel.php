<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVoucherModel extends Model
{
    use HasFactory;
    protected $table = 'nguoi_dung_voucher';

    public $timestamps = false;

    public $primaryKey = 'maNDV';
}
