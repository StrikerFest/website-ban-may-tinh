<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStatusModel extends Model
{
    use HasFactory;
    protected $table = 'tinh_trang_san_pham';

    public $timestamps = false;

    public $primaryKey = 'maTTSP';
}
