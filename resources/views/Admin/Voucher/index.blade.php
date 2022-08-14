<html lang="en">

<head>
    @include("Admin.Layout.Common.meta")
    <script src="https://cdn.tiny.cloud/1/13dhm7ievvt2m5zqgf71jpj7kzxx89vu8bh22bhcrh5717n8/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
</head>

<body>
    <!-- Page Wrapper -->
    <div id="wrapper">

        @include("Admin.Layout.Common.side_nav_menu")

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            @include("Admin.Layout.Common.header")
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Voucher</h1>
                <p class="mb-4">Trang thông tin voucher.</p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Bảng voucher hiện tại</h6>
                        <!-- Filter -->
                            <div style="margin-top: 10px">
                                <table>
                                    <h6>Bộ lọc</h6>
                                    <form method="get">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input class="form-control" type="text" name="searchName" value="{{$searchName}}" placeholder="Nhập tên voucher">
                                            </div>
                                            <div class="col-sm-3">
                                                <input class="form-control" type="number" name="searchValue" value="{{$searchValue}}" placeholder="Nhập giá trị">
                                            </div>
                                            <div class="col-sm-3">
                                                <select class="form-control" name="searchType">
                                                    <option value="" selected>Thể loại</option>
                                                    @foreach($TheLoaiVoucher as $TLV)
                                                        <option value="{{$TLV->tenTLV}}" <?php if($searchType == $TLV->tenTLV)echo "selected" ?>>
                                                            {{$TLV->tenTLV}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <button class="btn btn-primary">Tìm kiếm</button>
                                            </div>
                                        </div>
                                    </form>
                                </table>
                            </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div style="font-size: 20px; margin: 5px 0; font-weight: bold;">
                                Tổng số bản ghi: {{$Voucher->total()}}
                            </div>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Voucher</th>
                                        <th>Thể loại</th>
                                        <th>Giá trị</th>
                                        <th>Số lượng</th>
                                        <th>Tặng phẩm</th>
                                        <th colspan="2" width="10%">Thao tác</th>
                                    </tr>
                                </thead>
                                <tfoot>

                                </tfoot>
                                <tbody>
                                    @foreach ($Voucher as $V)
                                    <tr>
                                        <td>{{$V->tenVoucher}}</td>
                                        <td>
                                            <?php
                                            foreach ($TheLoaiVoucher as $TLV) {
                                                if (($V->maTLV) == ($TLV->maTLV)) {
                                                    echo $TLV->tenTLV;
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $getGiftValue = function () use ($V, $TangPham) {
                                                if ($V->maSP) {
                                                    foreach ($TangPham as $SP) {
                                                        if (($SP->maSP) == ($V->maSP)) {
                                                            return $SP->giaSP;
                                                        }
                                                    }
                                                }
                                                return 0;
                                            };
                                            echo $V->getVoucherValue($getGiftValue());
                                            ?>
                                        </td>
                                        <td>{{$V->soLuong}}</td>
                                        <td>
                                            <?php
                                            if ($V->maSP) {
                                                foreach ($TangPham as $SP) {
                                                    if (($SP->maSP) == ($V->maSP)) {
                                                        echo $SP->tenSP;
                                                    }
                                                }
                                            } else {
                                                echo ' ';
                                            }
                                            ?>
                                        </td>
                                        <td width="35%">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <form action="{{route('productVoucher.index', $V->maVoucher)}}" method="get">
                                                        @csrf
                                                        <button class="btn btn-primary btn-user btn-block">Sản phẩm</button>
                                                    </form>
                                                </div>
                                                <div class="col-sm-4">
                                                    <form action="{{route('voucher.edit', $V->maVoucher)}}" method="get">
                                                        @csrf
                                                        <button class="btn btn-primary btn-user btn-block">Sửa</button>
                                                    </form>
                                                </div>
                                                <div class="col-sm-4">
                                                    <form action="{{route('voucher.destroy', $V->maVoucher)}}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button onclick="return confirm('Xác nhận xóa voucher?')" class="btn btn-primary btn-user btn-block">
                                                            Xóa
                                                        </button>
                                                    </form>
                                                </div>
                                            <div class="row">
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{$Voucher->links()}}
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Thêm voucher mới</h6>
                    </div>
                    <!-- <div class="card-header">
                        <form action="{{route('voucher.sample')}}" method="get">
                            Thêm bằng file Excel
                            <button>Tải file mẫu</button>
                        </form>
                        <form action="{{route('voucher.excel')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="file-excel">
                            <button>Xác nhận</button>
                        </form>
                        <?php //if(!session()->has('sanPham')){ ?>
                            @if(session()->has('success'))
                                <div class="alert alert-success">{{session()->get('success')}}</div>
                            @endif
                        <?php //} ?>
                        @if(isset($errors) && $errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    {{$error}}
                                    <br>
                                @endforeach
                            </div>
                        @endif
                    </div> -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <form class="user" action="{{ route('voucher.store') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label class="form-inline label">Tên voucher</label>
                                        @error('tenVoucher')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" class="form-control" id="exampleProduct" placeholder="Voucher code" name="tenVoucher">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-6 mb-sm-0">
                                        <label class="form-inline label">Số lượng</label>
                                        @error('soLuong')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="number" class="form-control" id="exampleProduct" placeholder="Quanity" name="soLuong" min="0">
                                    </div>
                                    <div class="col-sm-6 mb-6 mb-sm-0">
                                        <label class="form-inline label">Thể loại voucher</label>
                                        @error('theLoaiVoucher')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <select class="form-control" name="maTLV" id="voucherType">
                                            <option value="" disabled selected hidden>Voucher Type</option>
                                            @foreach($TheLoaiVoucher as $TLV)
                                            <option value="{{ $TLV->maTLV }}">{{ $TLV->tenTLV }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-6 mb-sm-0" id="resizable">
                                        <label class="form-inline label">Giá trị</label>
                                        @error('giaTri')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="number" class="form-control" id="giaTri" placeholder="Value" name="giaTri" min="0">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0" id="dynamic-div" style="display: none;">
                                        <label class="form-inline label">Tặng phẩm</label>
                                        <select class="form-control select2" name="maSP" id="gift">
                                            <option value="default" disabled selected hidden>Gift</option>
                                            @foreach($TangPham as $SP)
                                            <option value="{{ $SP->maSP }}">{{ $SP->tenSP }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Add data
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>

    </div>
    <!-- End of Page Wrapper -->
    @include("Admin.Layout.Common.bottom_script")

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });
    </script>
    <script>
        <?php if(session()->has('delete')){ ?>
            alert('{{session()->get('delete')}}')
        <?php } ?>
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function(){
            //Hàm thêm searchbox vào select option
            const searchboxInDropdown = () => {
                $('.select2').select2({
                    theme: "classic"
                });
            }
            searchboxInDropdown();

            //Chọn tặng phẩm sẽ tự động điền vào trường giá trị
            $('#gift').on('change', function(e){
                let maSP = e.target.value;
                $.ajax({
                    url: "{{ url('admin/getGiftValue') }}/"+maSP,
                    type: "get",
                    success: function(res){
                        if(res){
                            $('#giaTri').val(res[0].giaSP)
                        }
                    }
                })
            })

            let voucherType = 0;
            $('#voucherType').on('change', function(e){
                voucherType = e.target.value
            switch(Number(voucherType)){
                case 1:
                    //Giảm giá tiền mặt
                    $('#resizable').addClass('col-sm-12 mb-6 mb-sm-0').removeClass('col-sm-6 mb-6 mb-sm-0')
                    $('#giaTri').attr({placeholder: 'Value (VND)', readonly: false})
                    $('#giaTri').val('')
                    $('#dynamic-div').css({display: 'none'})
                    break;
                case 2:
                    //Giảm giá %
                    $('#resizable').addClass('col-sm-12 mb-6 mb-sm-0').removeClass('col-sm-6 mb-6 mb-sm-0')
                    $('#giaTri').attr({placeholder: 'Value (%)', readonly: false})
                    $('#giaTri').val('')
                    $('#dynamic-div').css({display: 'none'})
                    break;
                case 3:
                    //Tặng phẩm
                    $('#resizable').addClass('col-sm-6 mb-6 mb-sm-0').removeClass('col-sm-12 mb-6 mb-sm-0')
                    $('#giaTri').attr({placeholder: 'Value', readonly: true})
                    $('#giaTri').val('')
                    $('#dynamic-div').css({display: 'block'})
                    $('span.select2').css({width: '100%'})
                    let maSP = $('#gift').val()
                    $.ajax({
                        url: "{{ url('admin/getGiftValue') }}/"+maSP,
                        type: "get",
                        success: function(res){
                            if(res){
                                $('#giaTri').val(res[0].giaSP)
                            }
                        }
                    })
                    break;
                default:
                    console.log('VoucherTypeId not found')
            }
            })
        });
    </script>
</body>

</html>