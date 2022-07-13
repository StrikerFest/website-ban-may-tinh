<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherModel extends Model
{
    use HasFactory;
    protected $table = 'voucher';

    public $timestamps = false;

    public $primaryKey = 'maVoucher';

    public function getVoucherValue($giaTangPham){
        switch($this->maTLV){
            case 1:
                //Giảm giá tiền mặt
                return number_format($this->giaTri) .' VND';
                break;
            case 2:
                //Giảm giá %
                return $this->giaTri .' %';
                break;
            case 3:
                //Tặng phẩm
                return number_format(($giaTangPham)) .' VND';
                break;
            default:
                return $this->giaTri;
                break;
        }
    }
}
