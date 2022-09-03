<?php

namespace App\Http\Controllers;

use App\Models\ProductImageModel;
use App\Models\ProductVoucherModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {

        // Kiểm tra biến search và cho vào session
        $search1 = $request->get('search');
        if ($search1 != null) {
            $request->session()->put('search', $search1);
        } else {
            $request->session()->put('search', "");
        }
        $search = $request->session()->get('search');

        // Lấy thể loại
        $theLoaiCha1 = $request->get("theLoaiCha");

        // Lấy loại
        $loai = $request->get('loai');

        // Nếu lấy thể loại lần đầu thành công - Cho vào session
        if ($theLoaiCha1 != null) {
            # code...
            $request->session()->put('theLoaiCha', $theLoaiCha1);
        }

        $theLoaiCha = $request->session()->get('theLoaiCha');

        $listTheLoai = DB::table('the_loai_con')->where('maTL', $theLoaiCha)->get();
        // Lấy hãng
        $listNhaSanXuat = DB::table('nha_san_xuat')->get();
        // Lấy ảnh
        $productImage = ProductImageModel::get();
        // Lấy giỏ hàng
        $cartItems = \Cart::getContent();

        // Lấy dữ liệu mới từ filter
        $productBrand = $request->get('nhaSanXuat');
        $theLoaiConCate = $request->get('theLoaiCon');

        // PRICE MIN là giá được điền trong trường điền
        // PRICE MIN 2 là giá được định trước
        // Lấy sản phẩm
        $priceMin = $request->get("priceMin");
        $priceMax = $request->get("priceMax");
        $priceMin2 = $request->get("priceMin2");
        $priceMax2 = $request->get("priceMax2");

        // // Nếu giá min không được nhập
        // if ($priceMin == null)
        //     $priceMin = 0;

        // // Nếu giá max không được nhập
        // if ($priceMax == null)
        //     $priceMax = 10000000000;

        // Nếu giá min định trước được trọn mà giá max ko được chọn
        if ($priceMin2 != null && $priceMax2 == null) {
            $priceMin = $priceMin2;
            $priceMax = 10000000000;
        }

        // Nếu giá max định trước được trọn mà giá min ko được chọn
        if ($priceMax2 != null && $priceMin2 == null) {
            $priceMax = $priceMax2;
            $priceMin = 0;
        }

        // Nếu giá min và max định trước được chọn
        if ($priceMax2 != null && $priceMin2 != null) {
            $priceMin = $priceMin2;
            $priceMax = $priceMax2;
        }

        // Nếu giá min lớn hơn giá max
        if ($priceMin > $priceMax) {
            $priceMin = 0;
            $priceMax = 10000000000;
        }

        // Cho vào session
        $request->session()->put('currentPriceMin', $priceMin);
        $request->session()->put('currentPriceMax', $priceMax);


        function get_string_between($string, $start, $end)
        {
            $string = ' ' . $string;
            $ini = strpos($string, $start);
            if ($ini == 0) return '';
            $ini += strlen($start);
            $len = strpos($string, $end, $ini) - $ini;
            return substr($string, $ini, $len);
        }

        // Lấy mã thể loại con
        switch ($loai) {
            case 'NSX':
                $productBrand = $id;
                break;
            case 'TLC':
                $theLoaiConCate = $id;
                break;
            case 'tien':
                // Dữ liệu ghi dưới ... triệu
                $priceRangeMin = get_string_between($id, 'duoi', 'trieu');
                // Dữ liệu ghi từ ... triệu đến ... triệu
                if ($priceRangeMin == '')
                    $priceRangeMin = substr($id, 0, strpos($id, 'trieu')) . '';

                // Dữ liệu ghi trên ... triệu
                $priceRangeMax = get_string_between($id, 'tren', 'trieu');
                // Dữ liệu ghi từ ... triệu đến ... triệu
                if ($priceRangeMax == '')
                    $priceRangeMax = get_string_between($id, '-', 'trieu');

                // Nhân với 1 triệu để thành giá thật
                $priceRangeMin *= 1000000;
                $priceRangeMax *= 1000000;

                // Không lấy được dữ liệu - Trả kết quả mặc định
                if ($priceRangeMin == '')
                    $priceRangeMin = 0;
                if ($priceRangeMax == '')
                    $priceRangeMax = 10000000000;

                // Gán dữ liệu
                $priceMin = $priceRangeMin;
                $priceMax = $priceRangeMax;
                break;
            case 'all':
                $theLoaiConCate = null;
                break;
            default:
                break;
        }

        // Thông số
        $listThongSo = DB::table('thong_so')
            ->join('the_loai_thong_so', 'the_loai_thong_so.maTS', '=', 'thong_so.maTS')
            ->join('the_loai', 'the_loai_thong_so.maTL', '=', 'the_loai.maTL')
            ->take(5)
            ->where('the_loai_thong_so.maTL', $theLoaiCha)
            ->where('thong_so.tenTS', '!=', 'Bộ vi xử lý')
            ->where('thong_so.tenTS', '!=', 'Chủng loại')
            ->where('thong_so.tenTS', '!=', 'Khe cắm')
            ->where('thong_so.tenTS', '!=', 'Dung lượng tối đa')
            ->get();
        $listSanPhamThongSo = DB::table('san_pham_thong_so')
            ->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')
            ->join('the_loai_thong_so', 'the_loai_thong_so.maTS', '=', 'thong_so.maTS')
            ->join('the_loai', 'the_loai_thong_so.maTL', '=', 'the_loai.maTL')
            ->join('the_loai_con', 'the_loai_con.maTL', '=', 'the_loai.maTL')
            ->where('the_loai_thong_so.maTL', $theLoaiCha)
            ->where('the_loai_con.maTLC', $theLoaiConCate)
            //// ->select('*', DB::raw('COUNT(CASE giaTri WHEN the_loai_con.maTLC = ' . $theLoaiConCate .' THEN 1 ELSE NULL END) AS soSPCungGiaTri'))
            //// ->select('*', DB::raw('count( giaTri) as soSPCungGiaTri'))

            //// ->where('thongSo.ten',)
            ->groupBy('giaTri')
            //// ->groupBy('san_pham_thong_so.maTS')
            ->get();

        $countTS = 0;
        // Lấy thông số
        $thongSoDauCate = $request->get('thongSoDau');
        $giaTriThongSoDauCate = $request->get('giaTriThongSoDau');
        // dd($giaTriThongSoDauCate);

        $thongSoCate = [];
        $giaTriThongSoCate = null;

        
        foreach ($listSanPhamThongSo as $SPTS) {
            if($thongSoDauCate == $request->get('thongSo'. $SPTS->maTS)){
                $thongSoDauCate = $request->get('thongSo'. $SPTS->maTS);
                $giaTriThongSoDauCate = $request->get('giaTriThongSo'. $SPTS->maTS);
            }
            if ($countTS == 0) {
                $countTS++;
                if ($giaTriThongSoDauCate !== null)
                    $thongSoCate += [$thongSoDauCate => $giaTriThongSoDauCate];
            } else {
                if ($request->get('thongSo' . $SPTS->maTS) == $SPTS->maTS) {
                    //// $data += [$category => $question];
                    //// $thongSoCate = $request->get('thongSo');
                    //// echo ('<br> $request->get("thongSo" . $SPTS->maTS)----------');
                    //// echo $request->get('thongSo' . $SPTS->maTS);
                    //// $thongSoCate += [$request->get('thongSo' . $SPTS->maTS) => $request->get('giaTriThongSo' . $SPTS->maTS)];
                    if ($request->get('giaTriThongSo' . $SPTS->maTS) !== null)
                        $thongSoCate += [$request->get('thongSo' . $SPTS->maTS) => $request->get('giaTriThongSo' . $SPTS->maTS)];
                    //// echo ('<br> $thongSoCate[$request->get("thongSo" . $SPTS->maTS)]----------');
                    $giaTriThongSoCate = $request->get('giaTriThongSo' . $SPTS->maTS);
                    //// echo $thongSoCate[$request->get('thongSo' . $SPTS->maTS)];
                } else {
                    $giaTriThongSoCate = null;
                }
            }
        }
        //// dd(!$thongSoCate);
        $priceMinCate = $priceMin;
        $priceMaxCate = $priceMax;

        $listSanPhamThongSoMotSP = DB::table('san_pham')
            ->join('the_loai_con', 'the_loai_con.maTLC', '=', 'san_pham.maTLC')
            ->join('san_pham_thong_so', 'san_pham_thong_so.maSP', '=', 'san_pham.maSP')
            ->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')
            ->where('san_pham.maTLC', $theLoaiConCate)
            //// ->join('the_loai', 'the_loai_thong_so.maTL', '=', 'the_loai.maTL')
            //// ->join('the_loai_con', 'the_loai_con.maTL', '=', 'the_loai.maTL')
            ->get();
        if (count($thongSoCate) !== 0)
            $listThongSoLoaiBo = DB::table('san_pham_thong_so')
                // ->join('the_loai_con', 'the_loai_con.maTLC', '=', 'san_pham.maTLC')
                // ->join('san_pham_thong_so', 'san_pham_thong_so.maSP', '=', 'san_pham.maSP')
                // ->join('thong_so', 'san_pham_thong_so.maTS', '=', 'thong_so.maTS')
                ->where(function ($query) use ($thongSoCate) {
                    if ($thongSoCate !== null)
                        foreach ($thongSoCate as $key => $value) {
                            // $query->where('san_pham_thong_so.maTS', '!=', $key);
                            $query->where('san_pham_thong_so.giaTri', '!=', $value);
                        }
                })
                ->groupBy('giaTri')
                ->get();
        else
            $listThongSoLoaiBo = null;
        // Sản phẩm được lọc
        $listSanPham = DB::table('san_pham')
            ->join('the_loai_con', 'the_loai_con.maTLC', '=', 'san_pham.maTLC')
            ->join('san_pham_thong_so', 'san_pham_thong_so.maSP', '=', 'san_pham.maSP')
            ->selectRaw('count(san_pham.maSP) as SPC, san_pham.*,the_loai_con.*,san_pham_thong_so.*')

            // Nhà sản xuất
            ->where(function ($query) use ($productBrand) {
                if ($productBrand != null)
                    $query->where('maNSX', $productBrand);
            })
            // Thể loại con
            ->where(function ($query) use ($theLoaiConCate) {
                if ($theLoaiConCate != null)
                    $query->where('san_pham.maTLC', $theLoaiConCate);
            })
            // Giá sản phẩm
            ->where(function ($query) use ($priceMin, $priceMax) {
                if ($priceMin != null && $priceMax != null)
                    $query->whereBetween('giaSP', [$priceMin, $priceMax]);
                elseif ($priceMin == null && $priceMax != null)
                    $query->whereBetween('giaSP', [0, $priceMax]);
                elseif ($priceMin != null && $priceMax == null)
                    $query->where('giaSP', '>', $priceMin);
                else
                    $query->where('giaSP', '>', 0);
            })
            // Thể loại cha
            ->where(function ($query) use ($theLoaiCha1) {
                if ($theLoaiCha1 != null)
                    $query->where('maTL', $theLoaiCha1);
            })
            // Thông số đầu
            // ->where(function ($query) use ($thongSoDauCate, $giaTriThongSoDauCate, $thongSoCate) {
            //     if ($thongSoDauCate != null || $giaTriThongSoDauCate != null)
            //         $query
            //             ->where('giaTri', $giaTriThongSoDauCate)
            //             ->orWhere(function ($query) use ($thongSoCate) {
            //                 foreach ($thongSoCate as $key => $value) {
            //                     $query->where('giaTri', $value);
            //                 }
            //             });
            // })
            ->where(function ($query) use ($listThongSoLoaiBo) {
                if ($listThongSoLoaiBo != null) {
                    foreach ($listThongSoLoaiBo as $TSLB) {
                        // echo "<br>--$TSLB->giaTri<br>";
                        $query->where('giaTri', '!=', $TSLB->giaTri);
                    }
                }
            })
            // ->where(function ($query) use ($giaTriThongSoDauCate) {
            //     if ($giaTriThongSoDauCate != null)
            //         $query->where('giaTri', $giaTriThongSoDauCate);
            // })
            // ->where(function ($query) use ($thongSoCate) {
            //     foreach ($thongSoCate as $key => $value) {
            //         echo "<br>$value";
            //         $query->orWhere('giaTri', $value)->where('maTS', $key);
            //     }
            // })

            // // Thông số
            // ->where(function ($query) use ($thongSoCate) {
            //     if ($thongSoCate != null)
            //         $query->where('maTS', $thongSoCate);
            // })
            // ->where(function ($query) use ($giaTriThongSoCate) {
            //     if ($giaTriThongSoCate != null)
            //         $query->where('giaTri', $giaTriThongSoCate);
            // })
            // Tìm kiếm
            ->where(function ($query) use ($search) {
                if ($search !== "")
                    $query->where('tenSP', 'like', '%' . $search . '%');
                else
                    $query->where('tenSP', 'like', '%%');
            });
        // dd('Here');
        $listSanPhamTemp = $listSanPham->get();


        //// foreach ($listSanPham as $SP) {
        ////     echo "<br>HERE1";
        $countLoop = 0;
        $countMax = count($thongSoCate);

        // foreach ($listSanPhamTemp as $SP) {
        //     foreach ($listSanPhamThongSoMotSP as $SPTSM) {
        //         // 1
        //         // 2 = 2
        //         if ($SPTSM->maSP == $SP->maSP) {
        //             if ($countMax !== 0) {
        //                 if ($countLoop % $countMax == 0) {
        //                     $countLoop = 0;
        //                 }
        //             } else {
        //             }
        //             foreach ($thongSoCate as $key => $value) {
        //                 // i3 == i3
        //                 // 64GB == 64GB
        //                 // echo "<br>$key-OUT-KEY";
        //                 // echo "<br>$value-OUT-VALUE<br>";

        //                 if ($value == $SPTSM->giaTri) {
        //                     // 1
        //                     // 2
        //                     $countLoop++;
        //                     echo "<br>HERE-$value-VALUE-$SPTSM->giaTri<br>";
        //                     echo "<br>$countLoop-YO-LOOP";
        //                     echo "<br>$countMax-YO-MAX<br>";
        //                 }
        //                 // echo "<br>HERE-";
        //                 // echo $SPTSM->giaTri;
        //             }
        //             if ($countLoop == $countMax) {
        //                 // echo "<br>HERE-SUCCESS-ID-$SP->maSP<br>";

        //                 // $listSanPham = $listSanPham->where('san_pham.maSP', $SP->maSP);
        //                 $listSanPham = $listSanPham->where(function ($query) use ($SP) {
        //                     if ($SP->maSP != null)
        //                         $query->where('san_pham.maSP', $SP->maSP);
        //                 });
        //                 //     // If fit - process here
        //                 // foreach ($thongSoCate as $key => $value) {
        //                 //     $listSanPham = $listSanPham->where('maTS', $key);
        //                 //     echo "<br>$key sad";
        //                 //     $listSanPham = $listSanPham->where('giaTri', $value);
        //                 //     echo "<br>$value das";
        //                 // }
        //             } else {
        //                 $countLoop = 0;
        //             }
        //         }
        //     }
        // }

        ///////

        // foreach ($thongSoCate as $key => $value) {
        //     $listSanPham = $listSanPham->where('maTS', $key);
        //     echo "<br>$key sad";
        //     $listSanPham = $listSanPham->where('giaTri', $value);
        //     echo "<br>$value das";
        // }
        // $listSanPham = $listSanPham->where('san_pham.maSP', $SP->maSP);
        if (count($thongSoCate) !== 0)
            $listSanPham = $listSanPham
                ->groupBy('san_pham.maSP')
                ->havingRaw('count(san_pham.maSP) = ' . count($thongSoCate))
                ->get();
        else
            $listSanPham = $listSanPham
                ->groupBy('san_pham.maSP')
                ->get();
        // dd(count($thongSoCate));
        // dd($listSanPham);



        // }
        // dd($listSanPhamThongSoMotSP);
        // die();

        // session()->forget('search');
        // // Nếu không có dữ liệu nhà sản xuất được chọn
        // if ($request->get('nhaSanXuat') == null) {
        //     // Nếu không có thể loại con
        //     if ($theLoaiConCate == null) {
        //         $listSanPham = DB::table('san_pham')->join('the_loai_con', 'the_loai_con.maTLC', '=', 'san_pham.maTLC')
        //             ->whereBetween('giaSP', [$priceMin, $priceMax])
        //             ->where('maTL', $request->get('theLoaiCha'))
        //             ->get();
        //     }
        //     // Nếu có thể loại con
        //     else {
        //         $listSanPham = DB::table('san_pham')->join('the_loai_con', 'the_loai_con.maTLC', '=', 'san_pham.maTLC')
        //             ->whereBetween('giaSP', [$priceMin, $priceMax])
        //             ->where('maTL', $request->get('theLoaiCha'))
        //             ->where('san_pham.maTLC', $theLoaiConCate)
        //             ->get();
        //     }
        // }
        // // Nếu có dữ liệu nhà sản xuất được chọn
        // else {
        //     // Nếu không có thể loại con
        //     if ($theLoaiConCate == null) {
        //         $listSanPham = DB::table('san_pham')->join('the_loai_con', 'the_loai_con.maTLC', '=', 'san_pham.maTLC')
        //             ->whereBetween('giaSP', [$priceMin, $priceMax])
        //             ->where('maTL', $request->get('theLoaiCha'))
        //             ->where('maNSX',  $request->get('nhaSanXuat'))
        //             ->get();
        //     }
        //     // Nếu có thể loại con
        //     else {
        //         $listSanPham = DB::table('san_pham')->join('the_loai_con', 'the_loai_con.maTLC', '=', 'san_pham.maTLC')
        //             ->whereBetween('giaSP', [$priceMin, $priceMax])
        //             ->where('maTL', $request->get('theLoaiCha'))
        //             ->where('san_pham.maTLC', $theLoaiConCate)
        //             ->where('maNSX',  $request->get('nhaSanXuat'))
        //             ->get();
        //     }
        // }

        // // Lấy thể loại con đầu tiên - ĐỂ LÀM J ?
        // $maTLCMin = DB::table('the_loai_con')->selectRaw('min(maTLC) as maTLC')->first();

        // Kiểm tra nếu không có session thể loại con ( bấm từ ngoài vào hoặc chưa chọn bên trong trang vật phẩm)
        $theLoaiChaCate = $request->get('theLoaiCha');
        // $theLoaiConCate = $request->get('theLoaiCon');
        $nhaSanXuatCate = $request->get('nhaSanXuat');
        $productPromotion = ProductVoucherModel::join('voucher', 'san_pham_voucher.maVoucher', '=', 'voucher.maVoucher')
            ->select('san_pham_voucher.*','voucher.tenVoucher','voucher.giaTri','voucher.soLuong')
            ->get();
        $listTheLoaiCha = DB::table('the_loai')->get();
        $listTheLoaiSidenav = DB::table('the_loai_con')->join('the_loai', 'the_loai_con.maTL', '=', 'the_loai.maTL')->get();
        return view('Customer.ProductCategory.show', [
            'cartItems' => $cartItems,
            'listTheLoaiCha' => $listTheLoaiCha,
            'listTheLoaiSidenav' => $listTheLoaiSidenav,
            'listSanPham' => $listSanPham,
            'productImage' => $productImage,
            'listNhaSanXuat' => $listNhaSanXuat,
            'listTheLoai' => $listTheLoai,
            'productPromotion' => $productPromotion,

            // 'maTLCMin' => $maTLCMin,
            'theLoaiChaCate' => $theLoaiChaCate,
            'theLoaiConCate' => $theLoaiConCate,
            'nhaSanXuatCate' => $nhaSanXuatCate,
            'thongSoCate' => $thongSoCate,
            'giaTriThongSoCate' => $giaTriThongSoCate,
            'priceMinCate' => $priceMinCate,
            'priceMaxCate' => $priceMaxCate,
            'search' => $search,

            'listThongSo' => $listThongSo,
            'listSanPhamThongSo' => $listSanPhamThongSo,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
