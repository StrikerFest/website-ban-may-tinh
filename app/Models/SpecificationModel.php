<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecificationModel extends Model
{
    use HasFactory;
    protected $table = 'thong_so';

    public $timestamps = false;

    public $primaryKey = 'maTS';
}
