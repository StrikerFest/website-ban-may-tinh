<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCommentModel extends Model
{
    use HasFactory;
    protected $table = 'binh_luan_bai_viet';

    public $timestamps = false;

    public $primaryKey = 'maBLBV';
}
