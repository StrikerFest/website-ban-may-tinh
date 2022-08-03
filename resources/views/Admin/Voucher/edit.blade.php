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

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Sửa voucher</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form class="user" action="{{ route('voucher.update', $Voucher->maVoucher) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label class="form-inline label">Mã voucher</label>
                                        @error('tenVoucher')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" class="form-control" id="exampleProduct" placeholder="Voucher code" name="tenVoucher" value="{{ $Voucher->tenVoucher }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-6 mb-sm-0">
                                        <label class="form-inline label">Ngày hết hạn</label>
                                        @error('ngayHetHan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="date" class="form-control" id="exampleProduct" name="ngayHetHan" min="<?php echo date("Y-m-d", strtotime("+1 day")); ?>" value="{{ date_format(date_create($Voucher->ngayHetHan), 'Y-m-d') }}">
                                    </div>
                                    <div class="col-sm-6 mb-6 mb-sm-0">
                                        <label class="form-inline label">Thể loại voucher</label>
                                        @error('theLoaiVoucher')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <select class="form-control" name="maTLV" id="voucherType">
                                            <option value="" disabled selected hidden>Voucher Type</option>
                                            @foreach($TheLoaiVoucher as $TLV)
                                            <option value="{{ $TLV->maTLV }}" <?php if($TLV->maTLV == $Voucher->maTLV)echo("selected") ?>>
                                                {{ $TLV->tenTLV }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-6 mb-sm-0">
                                        <label class="form-inline label">Giá trị</label>
                                        @error('giaTri')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="number" class="form-control" id="giaTri" placeholder="Value" name="giaTri" min="0" value="{{ $Voucher->giaTri }}">
                                    </div>
                                    <div class="col-sm-6 mb-6 mb-sm-0">
                                        <label class="form-inline label">Số lượng</label>
                                        @error('soLuong')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="number" class="form-control" id="exampleProduct" placeholder="Quanity" name="soLuong" min="0" value="{{ $Voucher->soLuong }}">
                                    </div>
                                </div>
                                <div class="form-group row" id="dynamic-div" style="display: none;">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label class="form-inline label">Tặng phẩm</label>
                                        <select class="form-control select2" name="maSP" id="gift">
                                            <option value="default" disabled selected hidden>Gift</option>
                                            @foreach($TangPham as $SP)
                                            <option value="{{ $SP->maSP }}" <?php if($SP->maSP == $Voucher->maSP)echo("selected") ?>>
                                                {{ $SP->tenSP }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label class="form-inline label">Mô tả</label>
                                        @error('moTa')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <textarea class="form-control" name="moTa" rows="5" placeholder="Content">{{ $Voucher->moTa }}</textarea>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Update data
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

            if($('#voucherType').val() == 3){
                //Tặng phẩm
                $('#dynamic-div').css({display: 'block'})
                $('span.select2').css({width: '100%'})
                $('#giaTri').attr({placeholder: 'Value', readonly: true})
            }

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
                    $('#giaTri').attr({placeholder: 'Value (VND)', readonly: false})
                    $('#giaTri').val('')
                    $('#dynamic-div').css({display: 'none'})
                    break;
                case 2:
                    //Giảm giá %
                    $('#giaTri').attr({placeholder: 'Value (%)', readonly: false})
                    $('#giaTri').val('')
                    $('#dynamic-div').css({display: 'none'})
                    break;
                case 3:
                    //Tặng phẩm
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