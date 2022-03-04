<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionModel extends Model
{
    use HasFactory;
    protected $table = 'quyen_han';

    // public $timestamps = false;

    public $primaryKey = 'maQH';
}
