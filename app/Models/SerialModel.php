<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SerialModel extends Model
{
    use HasFactory;
    protected $table = 'serial';

    public $timestamps = false;

    public $primaryKey = 'maSerial';
}
