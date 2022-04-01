<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierModel extends Model
{
    use HasFactory;
    protected $table = 'nha_phan_phoi';

    public $timestamps = false;

    public $primaryKey = 'maNPP';
}
