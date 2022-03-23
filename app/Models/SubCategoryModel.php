<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoryModel extends Model
{
    use HasFactory;
    protected $table = 'the_loai_con';

    public $timestamps = false;

    public $primaryKey = 'maTLC';
}
