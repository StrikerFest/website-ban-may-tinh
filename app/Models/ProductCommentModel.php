<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCommentModel extends Model
{
    use HasFactory;
    protected $table = 'binh_luan_san_pham';

    public $timestamps = false;

    public $primaryKey = 'maBLSP';
}
