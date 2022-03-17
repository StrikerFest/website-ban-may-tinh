<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSpecificationModel extends Model
{
    use HasFactory;
    protected $table = 'san_pham_thong_so';

    public $timestamps = false;

    public $primaryKey = 'maSPTS';
}
