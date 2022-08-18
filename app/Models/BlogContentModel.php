<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogContentModel extends Model
{
    use HasFactory;
    protected $table = "noi_dung_bai_viet";

    public $timestamps = false;
    
    public $primaryKey = "maNDBV";
}
