<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportDetailModel extends Model
{
    use HasFactory;
    protected $table = 'nhap_kho_chi_tiet';

    public $timestamps = false;

    public $primaryKey = 'maNKCT';
}
