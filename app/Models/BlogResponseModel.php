<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogResponseModel extends Model
{
    use HasFactory;
    protected $table = 'phan_hoi_bai_viet';

    public $timestamps = false;

    public $primaryKey = 'maPHBV';
}
