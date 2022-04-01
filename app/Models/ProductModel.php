<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'san_pham';

    public $timestamps = false;

    public $primaryKey = 'maSP';

    public function getProductStatus(){
        if(($this->soLuong) == 0){
            return "Hết hàng";
        }elseif(($this->soLuong) <= 10){
            return "Gần hết hàng";
        }else{
            return "Còn hàng";
        }
    }    
}
