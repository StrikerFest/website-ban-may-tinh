<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarrantyModel extends Model
{
    use HasFactory;
    protected $table = 'bao_hanh';

    public $timestamps = false;

    public $primaryKey = 'maBH';
}
