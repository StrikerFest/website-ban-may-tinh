<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorySpecificationModel extends Model
{
    use HasFactory;
    protected $table = 'the_loai_thong_so';

    public $timestamps = false;

    public $primaryKey = ['maTL', 'maTS'];
}
