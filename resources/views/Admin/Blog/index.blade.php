<!DOCTYPE html>
<html lang="en">
<head>
    @include("Admin.Layout.Common.meta")
    <script src="https://cdn.tiny.cloud/1/13dhm7ievvt2m5zqgf71jpj7kzxx89vu8bh22bhcrh5717n8/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                    <h1 class="h3 mb-2 text-gray-800">Blog</h1>
                    <p class="mb-4">Trang thông tin blog.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bảng blog hiện tại</h6>
                            <!-- Filter -->
                            <div style="margin-top: 10px">
                                <table>
                                    <h6>Bộ lọc</h6>
                                    <form method="get">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input class="form-control" type="text" name="searchName" value="{{$searchName}}" placeholder="Nhập tiêu đề">
                                            </div>
                                            <div class="col-sm-2">
                                                <input class="form-control" type="date" name="NBD" value="{{$NBD}}" max="<?php echo date('Y-m-d'); ?>">
                                            </div>
                                            <div class="col-sm-2">
                                                <input class="form-control" type="date" name="NKT" value="{{$NKT}}" max="<?php echo date('Y-m-d'); ?>">
                                            </div>
                                            <div class="col-sm-2">
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
                                    Tổng số bản ghi: {{$baiViet->total()}}
                                </div>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tên bài viết</th>
                                            <th>Người viết</th>
                                            <th>Ngày tạo</th>
                                            <th>Thể loại</th>
                                            <!-- <th>Tình trạng</th> -->
                                            <th colspan="3" width="25%">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tfoot>

                                    </tfoot>
                                    <tbody>
                                    @foreach ($baiViet as $BV)
                                        <tr>
                                            <td>{{$BV->tenBV}}</td>
                                            <!-- <td>
                                                <img
                                                    class="card-img-top"
                                                    style="height: 150px; width: 150px; border: 1px solid lightgray"
                                                    src="{{ asset('assets/img/'.$BV->anh) }}"
                                                    alt="..."
                                                />
                                            </td> -->
                                            <td>
                                                <?php
                                                    foreach($nhanVien as $NV){
                                                        if(($BV->maNV)==($NV->maND)){
                                                            echo $NV->tenND;
                                                        }
                                                    }
                                                ?>
                                            </td>
                                            <td>{{date_format(date_create($BV->ngayTao),"d-m-Y")}}</td>
                                            <td>{{$BV->theLoai==0 ? "Bài blog" : "Bài viết về sản phẩm"}}</td>
                                            <td>
                                                <form action="{{route('blog.show', $BV->maBV)}}" method="get">
                                                    @csrf
                                                    <button class="btn btn-primary btn-user btn-block">Nội dung</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('blog.edit', $BV->maBV)}}" method="get">
                                                    @csrf
                                                    <button class="btn btn-primary btn-user btn-block">Sửa</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('blog.destroy', $BV->maBV)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button 
                                                        onclick="return confirm('Xác nhận xóa bài viết?')"
                                                        class="btn btn-primary btn-user btn-block"
                                                        >
                                                        Xóa
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{$baiViet->links()}}
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Thêm bài viết mới</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="user" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label class="form-inline label">Tên bài viết</label>
                                        @error('tenBV')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" class="form-control form-control-user" id="exampleProduct"
                                            placeholder="Blog main title" name="tenBV">
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-4 mb-sm-0">
                                        <label class="form-inline label">Thể loại</label>
                                        @error('theLoai')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <select class="form-control" name="theLoai">
                                            <option value="" disabled selected hidden>Type</option>
                                            <option value="0">Bài blog</option>
                                            <option value="1">Bài viết về sản phẩm</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 mb-4 mb-sm-0">
                                        <input type="hidden" name="maNV" value="<?php echo(session()->get('admin')) ?>">
                                        <label class="form-inline label">Người viết</label>
                                        @error('maNV')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" class="form-control" id="exampleProduct"
                                            placeholder="Creator" value="<?php echo(session()->get('tenAdmin')) ?>" readonly>
                                    </div>
                                    <div class="col-sm-4 mb-4 mb-sm-0">
                                        <label class="form-inline label">Ngày tạo</label>
                                        @error('ngayTao')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="date" class="form-control" id="exampleProduct" name="ngayTao" value="<?php echo date('Y-m-d'); ?>" readonly>
                                    </div>
                                </div>
                                <div id="sample-div">
                                    <div>
                                        <hr style="background: #333;margin-top: 50px;"/>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label class="form-inline label">Tiêu đề</label>
                                                @error('tieuDe.*')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <input type="text" class="form-control" id="exampleProduct"
                                                    placeholder="Blog title" name="tieuDe[]">
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label class="form-inline label">Ảnh</label>
                                                @error('anh')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <input type="file" class="form-control-file" name="anh[]">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <label class="form-inline label">Nội dung</label>
                                                @error('noiDung.*')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <textarea class="form-control abc" name="noiDung[]" rows="5" placeholder="Content"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="dynamic-div">

                                </div>
                                <div class="row">
                                    <div class="col-sm-11">

                                    </div>
                                    <div class="col-sm-1">
                                        <button style="margin: 15px 0;" name="add" id="add" class="btn btn-success" onclick="event.preventDefault()">
                                        Thêm
                                        </button>
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
        const init = () => {
            tinymce.init({
                selector: 'textarea.abc',
                plugins: 'advlist autolink lists link image charmap preview anchor pagebreak table',
                toolbar_mode: 'floating',
            });
        }
        init();
        $(document).ready(function() {
            $('#add').on('click', function(){
                
                // var html = document.querySelector('#sample-div').innerHTML;
                var html = `
                                    <div>
                                        <hr style="background: #333;margin-top: 50px;"/>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label class="form-inline label">Tiêu đề</label>
                                                <input type="text" class="form-control" id="exampleProduct"
                                                    placeholder="Blog title" name="tieuDe[]">
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label class="form-inline label">Ảnh</label>
                                                <input type="file" class="form-control-file" name="anh[]">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <label class="form-inline label">Nội dung</label>
                                                <textarea class="form-control abc" name="noiDung[]" rows="5" placeholder="Content"></textarea>
                                            </div>
                                        </div>
                                    </div>
                `;
                
                html += `<div class="row">
                            <div class="col-sm-11">

                            </div>
                            <div class="col-sm-1">
                            <button style="margin: 15px 0;" id="remove" class="btn btn-danger" onclick="event.preventDefault()">
                            Xoá
                                </button>
                                </div>
                        </div>`
                        
                $('#dynamic-div').append(html);
                init();
            })

            $(document).on('click', '#remove', function(){
                $(this).closest('.row').prev().remove();
                $(this).closest('.row').remove();
            })
            
        })
    </script>
</body>
</html>
