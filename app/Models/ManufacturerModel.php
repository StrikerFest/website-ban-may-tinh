<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManufacturerModel extends Model
{
    use HasFactory;
    protected $table = 'nha_san_xuat';

    public $timestamps = false;

    public $primaryKey = 'maNSX';
}
