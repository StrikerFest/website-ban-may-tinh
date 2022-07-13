<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherTypeModel extends Model
{
    use HasFactory;
    protected $table = 'the_loai_voucher';

    public $timestamps = false;

    public $primaryKey = 'maTLV';
}
