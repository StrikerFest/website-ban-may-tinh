<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceiptStatusModel extends Model
{
    use HasFactory;
    protected $table = 'tinh_trang_hoa_don';

    public $timestamps = false;

    public $primaryKey = 'maTTHD';
}
