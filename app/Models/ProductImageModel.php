<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImageModel extends Model
{
    use HasFactory;
    protected $table = 'anh_san_pham';

    public $timestamps = false;

    public $primaryKey = 'maASP';
}
