<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'nguoiDung';

    // public $timestamps = false;

    public $primaryKey = 'maND';

    public $role = 'maCV';
}
