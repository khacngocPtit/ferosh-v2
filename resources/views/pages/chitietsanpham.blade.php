@extends('master-layout')


@section('title')
Chi tiết sản phẩm
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/jquery.exzoom.css')}}">
<link rel="stylesheet" href="{{asset('css/chitiet-sanpham.css')}}">
 
@endsection



@section('content')

<main>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 zoom">
                    <div class="exzoom" id="exzoom">
                        <!-- Images -->
                        <div class="exzoom_img_box">
                            <ul class='exzoom_img_ul'>
                            <li><img style="width:100%;magin:auto;" src="{{asset('image/Cindy-Dress-Black-1(1).jpg')}}"/></li>
                            <li><img style="width:100%;magin:auto;" src="{{asset('image/Cindy-Dress-Black-2(1).jpg')}}"/></li>
                                
                            </ul>
                        </div>
                        <div class="exzoom_nav"></div>
                    </div>
                </div>
                <div class="col-12 col-lg-7 product">
                    <h2 class="title-sp">Coquelicot</h2>
                    <h2 class="product-name"> Coquelicot Váy ren hoa màu đỏ cam</h2>
                    <div class="size pt-2">
                        <strong>Kích thước</strong>
                        <ul class="size-of-product">
                            <li>2XL</li>
                            <li>XL</li>
                            <li>L</li>
                            <li>M</li>
                        </ul>  
                    </div>
                    
                    <div class="danh-gia">
                        <p>Chất liệu: <strong>Lụa tây thi</strong></p>
                        <p>Chiều dài sản phẩm: <strong>100cm</strong></p>
                        <p>Loại sản phẩm: <strong>Công sở</strong></p>
                        <p>Màu sắc: <strong >Vàng</strong></p>
                    </div>
                    <p class="old-price">1.480.000 VND</p>
                    <p class="new-price">740.000 VND | <span class="animation-color">Giảm 50%</span></p>
                    <div class="row">
                        <div class="col-6">
                            <a href="#" class="btn btn-danger">Thêm vào mục yêu thích</a>
                            <a href="#" class="btn btn-success">Đặt mua</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</main>


@endsection



@section('js')
<script src="{{asset('js/jquery.exzoom.js')}}"></script>
<script src="{{asset('js/slider.js')}}"></script>
<script src="{{asset('js/main-product.js')}}"></script>
<script>
	$(function(){
		$("#exzoom").exzoom({
			"autoPlay": false
		});
	});
</script>
@endsection
