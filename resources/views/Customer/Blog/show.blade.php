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
            <div class="container-fluid" style="padding-top: 70px">
                {{-- Tiêu đề --}}
                <div class="row">
                    <div class="col-md-12 ">
                        <h1 class="text-center">{{ $baiViet->tieuDe }}</h1>
                        <h5 class="text-center" style="padding-right:0%">
                            @foreach ($listNguoiDung as $ND)
                                @if ($baiViet->maNV == $ND->maND)
                                    Tác giả: {{ $ND->tenND }}
                                    <div class="text-danger">
                                        {{ $baiViet->ngayTao }}
                                    </div>
                                @endif
                            @endforeach
                        </h5>
                    </div>
                </div>
                {{-- Hết - Tiêu đề --}}

                {{-- Hình ảnh --}}
                <div class="row">
                    <div class="col-md-12 text-center" style="width:100%">
                        <img style="height: 500px;width:65%;" src="{{ asset('assets/img/' . $baiViet->anh) }}"
                            class="w-20 rounded" alt="Thumbnail">
                    </div>
                </div>
                {{-- Hết - Hình ảnh --}}

                {{-- Nội dung --}}
                <div class="row " style="padding-top: 5%; justify-content: center; word-break: break-word">
                    <div class="md-col-12" style="padding: 0px 5%;">
                        <p style="font-size: 1.2rem;text-justify: distribute-all-lines">
                            <?php
                            echo nl2br($baiViet->noiDung);
                            ?>
                        </p>
                    </div>
                    <div class="text-center width-100">
                        <a href="{{ route('blogCustomer.index') }}">
                            <button class="btn btn-danger">
                                Quay về
                            </button>
                        </a>
                    </div>
                </div>
                {{-- Hết - Nội dung --}}

                {{-- Comment --}}
                <div class="row">
                    <div class="container mb-5 mt-5">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-center mb-5" id="comment"> Bình luận bài viết </h3>
                                    {{-- Tạo bình luận --}}
                                    <div class="row" style="padding:  0% 0% 5% 0%">
                                        <form action="{{route('blogCommentCustomer.store')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="maNDBinhLuan" value="{{session()->get('khachHang')}}">
                                            <input type="hidden" name="maBVBinhLuan" value="{{$baiViet->maBV}}">
                                            <div style="box-sizing: border-box;width:100%;">
                                                <textarea name="binhLuan" cols="130" rows="4" placeholder="Nhập bình luận của bạn tại đây"></textarea>
                                            </div>
                                            <button class="btn btn-danger" style="margin-top:1%">
                                                Gửi ngay
                                            </button>
                                        </form>
                                    </div>
                                    {{-- Hết - Tạo bình luận --}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{-- Container bình luận --}}
                                            <div class="media">
                                                <div class="media-body">
                                                    @foreach ($blogCommentMain as $BCM)
                                                        @if($BCM->maBV == $baiViet->maBV)

                                                        <div class="row">
                                                            <img class="mr-3 rounded-circle" alt="Bootstrap Media Preview" src="http://cdn.onlinewebfonts.com/svg/img_24787.png" style="width:10%;height: 10%;padding:1%" />
                                                            <div class="col-8 d-flex" style="flex-direction: column">
                                                                @foreach($listNguoiDung as $U)
                                                                    @if($U->maND == $BCM->maND)
                                                                        <h5>{{$U->tenND}}</h5>
                                                                    @endif
                                                                @endforeach
                                                                <div>{{$BCM->ngayTao}}</div>
                                                                <h5>{{$BCM->noiDung}}</h5>
                                                            </div>
                                                            <div class="col-4">
                                                            </div>
                                                        </div>

                                                        @foreach ($blogComment as $BC)
                                                            @if($BC->maBLC == $BCM->maBLBV)

                                                                {{-- Phản hồi --}}
                                                                <div class="media mt-4 " style="padding-left:8%">
                                                                    <img class="rounded-circle" alt="Bootstrap Media Another Preview" src="http://cdn.onlinewebfonts.com/svg/img_24787.png" style="width:10%;height: 10%;padding:1%" />
                                                                    <div class="media-body">
                                                                        <div class="row">
                                                                            <div class="col-12 d-flex" style="flex-direction: column">
                                                                                @foreach($listNguoiDung as $U)
                                                                                    @if($U->maND == $BC->maND)
                                                                                        <h5>{{$U->tenND}}</h5>
                                                                                    @endif
                                                                                @endforeach
                                                                                <div>{{$BC->ngayTao}}</div>
                                                                                <h5>{{$BC->noiDung}}</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- Hết phản hồi --}}
                                                            @endif
                                                        @endforeach
                                                        {{-- Form gửi phản hồi --}}
                                                        <form action="{{route('blogCommentCustomer.store')}}" method="POST" style="padding-left:8%">
                                                            @csrf
                                                            <input type="hidden" name="maNDBinhLuan" value="{{session()->get('khachHang')}}">
                                                            <input type="hidden" name="maBVBinhLuan" value="{{$baiViet->maBV}}">
                                                            <input type="hidden" name="maBLC" value="{{$BCM->maBLBV}}">
                                                            <textarea name="binhLuan" id="BL{{$BCM->maBLBV}}" cols="110" rows="3"></textarea>
                                                            <button class="btn btn-danger" style="margin-top:1%">
                                                                Gửi ngay
                                                            </button>
                                                        </form>
                                                        {{-- Hết - Form gửi phản hồi --}}
                                                        @endif
                                                    @endforeach
                                                    {{-- Hết bình luận cha --}}


                                                </div>
                                            </div>
                                            {{-- Hết - Container bình luận --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Hết - Comment --}}

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
