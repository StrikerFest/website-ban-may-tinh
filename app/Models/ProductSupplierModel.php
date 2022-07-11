<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSupplierModel extends Model
{
    use HasFactory;
    protected $table = 'san_pham_nha_phan_phoi';

    public $timestamps = false;

    public $primaryKey = 'maSPNPP';
}
