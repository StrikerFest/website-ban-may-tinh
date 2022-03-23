<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionModel extends Model
{
    use HasFactory;
    protected $table = 'khuyen_mai';

    public $timestamps = false;

    public $primaryKey = 'maKM';
}
