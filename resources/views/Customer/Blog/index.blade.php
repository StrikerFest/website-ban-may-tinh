<html lang="en">

<head>
    @include('Customer.Layout.Common.meta')
</head>
@include('Customer.Layout.Common.header')

<body>
    <!-- Wrapper - Cả trang -->
    <div id="wrapper">


        <!-- Wrapper - Chỉ riêng phần nội dung - Không bao gồm navbar -->
        <div id="content-wrapper" class="d-flex flex-row">
            @include('Customer.Layout.Common.side_nav_menu')

            <!-- Content của trang -->
            <div class="container-fluid" style="padding-top: 70px;">
                {{-- Main --}}
                <h1>Blog công nghệ BKCOM</h1>
                @foreach ($listBlog as $LB)
                <form action="{{route('blogCustomer.show',$LB->maBV)}}">
                    <div class="row padding-5">
                        <div class="col-md-3 ">
                            <img style="height: 200px;width: auto;"
                                src="{{ asset('assets/img/' . $LB->anh) }}" class="w-20 rounded"
                                alt="Thumbnail">
                        </div>
                        <div class="col-md-9 ">
                            <h1 onClick="javascript:this.form.submit();" class="bg-danger text-light padding-5 rounded">{{$LB->tieuDe}}</h1>
                            <h5>{{ substr($LB->noiDung, 0, 350) . '...'}}</h5>
                            <button class="btn btn-danger">
                                Xem thêm
                            </button>
                        </div>
                    </div>
                </form>
                @endforeach
                {{-- Hết - Main --}}



            </div>
            <!-- /.container-fluid -->
        </div>

    </div>
    <!-- End of Page Wrapper -->
    @include('Customer.Layout.Common.bottom_script')
    <script>
    </script>
</body>

</html>
