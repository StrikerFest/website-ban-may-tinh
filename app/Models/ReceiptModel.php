<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceiptModel extends Model
{
    use HasFactory;
    protected $table = 'hoa_don';

    public $timestamps = false;

    public $primaryKey = 'maHD';
}
