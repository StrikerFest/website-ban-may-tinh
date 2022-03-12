<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailReceiptModel extends Model
{
    use HasFactory;
    protected $table = 'hoa_don_chi_tiet';

    public $timestamps = false;

    public $primaryKey = 'maHDCT';
}
