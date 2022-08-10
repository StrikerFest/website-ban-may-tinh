<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarrantyInfoModel extends Model
{
    use HasFactory;
    protected $table = 'thong_tin_bao_hanh';

    public $timestamps = false;

    public $primaryKey = 'maTTBH';
}
