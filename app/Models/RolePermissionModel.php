<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePermissionModel extends Model
{
    use HasFactory;
    protected $table = 'chuc_vu_quyen_han';

    public $timestamps = false;

    public $primaryKey = ['maCV', 'maQH'];
}
