<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogStatus extends Model
{
    use HasFactory;
    protected $table = 'tinh_trang_bai_viet';

    public $timestamps = false;

    public $primaryKey = 'maTTBV';
}
