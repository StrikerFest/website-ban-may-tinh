<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerImageModel extends Model
{
    use HasFactory;
    protected $table = 'anh_quang_cao';

    public $timestamps = false;

    public $primaryKey = 'maAQC';
}
