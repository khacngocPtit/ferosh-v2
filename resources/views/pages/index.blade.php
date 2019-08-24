@extends('master-layout')


@section('title')
Ferosh | Thiết kế thời trang cao cấp

@endsection

@section('css')
 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />	
<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">

@endsection



@section('content')
<main>
	<div class="container">
		<!-- Slide -->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="https://ferosh.vn/upload/files/banner-SALE-2000x668_4.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="https://ferosh.vn/upload/files/banner-Designer%20Hunt%202000X668.jpg" alt="Second slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<!-- San phẩm -->
		<div class="list-product">
			<div class="phantrang">
				<a href="#">Bộ sưu tập</a>
				&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="#">Sản phẩm</a>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6">
		            <div class="product-grid">
		                <div class="product-image">
		                    <a href="#">
		                        <img class="pic-1" src="{{asset('image/Cindy-Dress-Black-1(1).jpg')}}">
		                        <img class="pic-2" src="{{asset('image/Cindy-Dress-Black-2(1).jpg')}}">
		                    </a>
		                    <ul class="social">
		                        <li><a href="" data-tip="Xem nhanh"><i class="fa fa-search"></i></a></li>
		                        <li><a href="" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
		                        <li><a href="" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
		                    </ul>
		                    <span class="product-new-label">Sale</span>
		                    <span class="product-discount-label">20%</span>
		                </div>
		                <ul class="rating">
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star disable"></li>
		                </ul>
		                <div class="product-content">
		                    <h3 class="title"><a href="#">Women's Blouse</a></h3>
		                    <div class="price">810.000 VND
		                        <span>900.000 VND</span>
		                    </div>
		                    <a class="add-to-cart" href="">+ Add To Cart</a>
		                </div>
		            </div>
        		</div>
        		<div class="col-md-3 col-sm-6">
		            <div class="product-grid">
		                <div class="product-image">
		                    <a href="#">
		                        <img class="pic-1" src="{{asset('image/Cindy-Dress-Black-1(1).jpg')}}">
		                        <img class="pic-2" src="{{asset('image/Cindy-Dress-Black-2(1).jpg')}}">
		                    </a>
		                    <ul class="social">
		                        <li><a href="" data-tip="Xem nhanh"><i class="fa fa-search"></i></a></li>
		                        <li><a href="" data-tip="Mục yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
		                        <li><a href="" data-tip="Thêm vào giỏ hàng	"><i class="fa fa-shopping-cart"></i></a></li>
		                    </ul>
		                    <span class="product-new-label">Sale</span>
		                    <span class="product-discount-label">20%</span>
		                </div>
		                <ul class="rating">
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star disable"></li>
		                </ul>
		                <div class="product-content">
		                    <h3 class="title"><a href="#">Women's Blouse</a></h3>
		                    <div class="price">810.000 VND
		                        <span>900.000 VND</span>
		                    </div>
		                    <a class="add-to-cart" href="">+ Add To Cart</a>
		                </div>
		            </div>
        		</div>
        		<div class="col-md-3 col-sm-6">
		            <div class="product-grid">
		                <div class="product-image">
		                    <a href="#">
		                        <img class="pic-1" src="{{asset('image/Cindy-Dress-Black-1(1).jpg')}}">
		                        <img class="pic-2" src="{{asset('image/Cindy-Dress-Black-2(1).jpg')}}">
		                    </a>
		                    <ul class="social">
		                        <li><a href="" data-tip="Xem nhanh"><i class="fa fa-search"></i></a></li>
		                        <li><a href="" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
		                        <li><a href="" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
		                    </ul>
		                    <span class="product-new-label">Sale</span>
		                    <span class="product-discount-label">20%</span>
		                </div>
		                <ul class="rating">
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star disable"></li>
		                </ul>
		                <div class="product-content">
		                    <h3 class="title"><a href="#">Women's Blouse</a></h3>
		                    <div class="price">810.000 VND
		                        <span>900.000 VND</span>
		                    </div>
		                    <a class="add-to-cart" href="">+ Add To Cart</a>
		                </div>
		            </div>
        		</div>
        		<div class="col-md-3 col-sm-6">
		            <div class="product-grid">
		                <div class="product-image">
		                    <a href="#">
		                        <img class="pic-1" src="{{asset('image/Cindy-Dress-Black-1(1).jpg')}}">
		                        <img class="pic-2" src="{{asset('image/Cindy-Dress-Black-2(1).jpg')}}">
		                    </a>
		                    <ul class="social">
		                        <li><a href="" data-tip="Xem nhanh"><i class="fa fa-search"></i></a></li>
		                        <li><a href="" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
		                        <li><a href="" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
		                    </ul>
		                    <span class="product-new-label">Sale</span>
		                    <span class="product-discount-label">20%</span>
		                </div>
		                <ul class="rating">
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star disable"></li>
		                </ul>
		                <div class="product-content">
		                    <h3 class="title"><a href="#">Women's Blouse</a></h3>
		                    <div class="price">810.000 VND
		                        <span>900.000 VND</span>
		                    </div>
		                    <a class="add-to-cart" href="">+ Add To Cart</a>
		                </div>
		            </div>
        		</div>
			</div>
			<div class="view-more">
				<button class="btn btn-primary mt-3 mb-3"><a href="#">Xem thêm</a></button>
			</div>
		</div>
		<div class="list-product">
			<div class="img-title">
				<img src="{{asset('image/banner-quystoc.jpg')}}" alt="">
			</div>
			<div class="phantrang">
				<a href="#">Bộ sưu tập</a>
				&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="#">Sản phẩm</a>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6">
		            <div class="product-grid">
		                <div class="product-image">
		                    <a href="#">
		                        <img class="pic-1" src="{{asset('image/NH311-1(1).jpg')}}">
		                        <img class="pic-2" src="{{asset('image/NH311-2(1).jpg')}}">
		                    </a>
		                    <ul class="social">
		                        <li><a href="" data-tip="Xem nhanh"><i class="fa fa-search"></i></a></li>
		                        <li><a href="" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
		                        <li><a href="" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
		                    </ul>
		                    <span class="product-new-label">Sale</span>
		                    <span class="product-discount-label">20%</span>
		                </div>
		                <ul class="rating">
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star disable"></li>
		                </ul>
		                <div class="product-content">
		                    <h3 class="title"><a href="#">Women's Blouse</a></h3>
		                    <div class="price">810.000 VND
		                        <span>900.000 VND</span>
		                    </div>
		                    <a class="add-to-cart" href="">+ Add To Cart</a>
		                </div>
		            </div>
        		</div>
        		<div class="col-md-3 col-sm-6">
		            <div class="product-grid">
		                <div class="product-image">
		                    <a href="#">
		                        <img class="pic-1" src="{{asset('image/NH311-1(1).jpg')}}">
		                        <img class="pic-2" src="{{asset('image/NH311-2(1).jpg')}}">
		                    </a>
		                    <ul class="social">
		                        <li><a href="" data-tip="Xem nhanh"><i class="fa fa-search"></i></a></li>
		                        <li><a href="" data-tip="Mục yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
		                        <li><a href="" data-tip="Thêm vào giỏ hàng	"><i class="fa fa-shopping-cart"></i></a></li>
		                    </ul>
		                    <span class="product-new-label">Sale</span>
		                    <span class="product-discount-label">20%</span>
		                </div>
		                <ul class="rating">
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star disable"></li>
		                </ul>
		                <div class="product-content">
		                    <h3 class="title"><a href="#">Women's Blouse</a></h3>
		                    <div class="price">810.000 VND
		                        <span>900.000 VND</span>
		                    </div>
		                    <a class="add-to-cart" href="">+ Add To Cart</a>
		                </div>
		            </div>
        		</div>
        		<div class="col-md-3 col-sm-6">
		            <div class="product-grid">
		                <div class="product-image">
		                    <a href="#">
		                        <img class="pic-1" src="{{asset('image/NH311-1(1).jpg')}}">
		                        <img class="pic-2" src="{{asset('image/NH311-2(1).jpg')}}">
		                    </a>
		                    <ul class="social">
		                        <li><a href="" data-tip="Xem nhanh"><i class="fa fa-search"></i></a></li>
		                        <li><a href="" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
		                        <li><a href="" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
		                    </ul>
		                    <span class="product-new-label">Sale</span>
		                    <span class="product-discount-label">20%</span>
		                </div>
		                <ul class="rating">
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star disable"></li>
		                </ul>
		                <div class="product-content">
		                    <h3 class="title"><a href="#">Women's Blouse</a></h3>
		                    <div class="price">810.000 VND
		                        <span>900.000 VND</span>
		                    </div>
		                    <a class="add-to-cart" href="">+ Add To Cart</a>
		                </div>
		            </div>
        		</div>
        		<div class="col-md-3 col-sm-6">
		            <div class="product-grid">
		                <div class="product-image">
		                    <a href="#">
		                        <img class="pic-1" src="{{asset('image/NH311-1(1).jpg')}}">
		                        <img class="pic-2" src="{{asset('image/NH311-2(1).jpg')}}">
		                    </a>
		                    <ul class="social">
		                        <li><a href="" data-tip="Xem nhanh"><i class="fa fa-search"></i></a></li>
		                        <li><a href="" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
		                        <li><a href="" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
		                    </ul>
		                    <span class="product-new-label">Sale</span>
		                    <span class="product-discount-label">20%</span>
		                </div>
		                <ul class="rating">
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star disable"></li>
		                </ul>
		                <div class="product-content">
		                    <h3 class="title"><a href="#">Women's Blouse</a></h3>
		                    <div class="price">810.000 VND
		                        <span>900.000 VND</span>
		                    </div>
		                    <a class="add-to-cart" href="">+ Add To Cart</a>
		                </div>
		            </div>
        		</div>
			</div>
			<div class="view-more">
				<button class="btn btn-primary mt-3 mb-3"><a href="#">Xem thêm</a></button>
			</div>
		</div>
		<div class="list-product">
			<div class="img-title">
				<img src="{{asset('image/banner-sale.jpg')}}" alt="">
			</div>
			<div class="phantrang">
				<a href="#">Bộ sưu tập</a>
				&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="#">Sản phẩm</a>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6">
		            <div class="product-grid">
		                <div class="product-image">
		                    <a href="#">
		                        <img class="pic-1" src="{{asset('image/set-16(1).jpg')}}">
		                        <img class="pic-2" src="{{asset('image/set-16-(1).jpg')}}">
		                    </a>
		                    <ul class="social">
		                        <li><a href="" data-tip="Xem nhanh"><i class="fa fa-search"></i></a></li>
		                        <li><a href="" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
		                        <li><a href="" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
		                    </ul>
		                    <span class="product-new-label">Sale</span>
		                    <span class="product-discount-label">20%</span>
		                </div>
		                <ul class="rating">
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star disable"></li>
		                </ul>
		                <div class="product-content">
		                    <h3 class="title"><a href="#">Women's Blouse</a></h3>
		                    <div class="price">810.000 VND
		                        <span>900.000 VND</span>
		                    </div>
		                    <a class="add-to-cart" href="">+ Add To Cart</a>
		                </div>
		            </div>
        		</div>
        		<div class="col-md-3 col-sm-6">
		            <div class="product-grid">
		                <div class="product-image">
		                    <a href="#">
		                        <img class="pic-1" src="{{asset('image/set-16(1).jpg')}}">
		                        <img class="pic-2" src="{{asset('image/set-16-(1).jpg')}}">
		                    </a>
		                    <ul class="social">
		                        <li><a href="" data-tip="Xem nhanh"><i class="fa fa-search"></i></a></li>
		                        <li><a href="" data-tip="Mục yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
		                        <li><a href="" data-tip="Thêm vào giỏ hàng	"><i class="fa fa-shopping-cart"></i></a></li>
		                    </ul>
		                    <span class="product-new-label">Sale</span>
		                    <span class="product-discount-label">20%</span>
		                </div>
		                <ul class="rating">
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star disable"></li>
		                </ul>
		                <div class="product-content">
		                    <h3 class="title"><a href="#">Women's Blouse</a></h3>
		                    <div class="price">810.000 VND
		                        <span>900.000 VND</span>
		                    </div>
		                    <a class="add-to-cart" href="">+ Add To Cart</a>
		                </div>
		            </div>
        		</div>
        		<div class="col-md-3 col-sm-6">
		            <div class="product-grid">
		                <div class="product-image">
		                    <a href="#">
		                        <img class="pic-1" src="{{asset('image/set-16(1).jpg')}}">
		                        <img class="pic-2" src="{{asset('image/set-16-(1).jpg')}}">
		                    </a>
		                    <ul class="social">
		                        <li><a href="" data-tip="Xem nhanh"><i class="fa fa-search"></i></a></li>
		                        <li><a href="" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
		                        <li><a href="" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
		                    </ul>
		                    <span class="product-new-label">Sale</span>
		                    <span class="product-discount-label">20%</span>
		                </div>
		                <ul class="rating">
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star disable"></li>
		                </ul>
		                <div class="product-content">
		                    <h3 class="title"><a href="#">Women's Blouse</a></h3>
		                    <div class="price">810.000 VND
		                        <span>900.000 VND</span>
		                    </div>
		                    <a class="add-to-cart" href="">+ Add To Cart</a>
		                </div>
		            </div>
        		</div>
        		<div class="col-md-3 col-sm-6">
		            <div class="product-grid">
		                <div class="product-image">
		                    <a href="#">
		                        <img class="pic-1" src="{{asset('image/set-16(1).jpg')}}">
		                        <img class="pic-2" src="{{asset('image/set-16-(1).jpg')}}">
		                    </a>
		                    <ul class="social">
		                        <li><a href="" data-tip="Xem nhanh"><i class="fa fa-search"></i></a></li>
		                        <li><a href="" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
		                        <li><a href="" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
		                    </ul>
		                    <span class="product-new-label">Sale</span>
		                    <span class="product-discount-label">20%</span>
		                </div>
		                <ul class="rating">
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star"></li>
		                    <li class="fa fa-star disable"></li>
		                </ul>
		                <div class="product-content">
		                    <h3 class="title"><a href="#">Women's Blouse</a></h3>
		                    <div class="price">810.000 VND
		                        <span>900.000 VND</span>
		                    </div>
		                    <a class="add-to-cart" href="">+ Add To Cart</a>
		                </div>
		            </div>
        		</div>
			</div>
			<div class="view-more">
				<button class="btn btn-primary mt-3 mb-3"><a href="#">Xem thêm</a></button>
			</div>
		</div>
	</div>
</main>
@endsection



@section('js')
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
 <script>
   AOS.init();
 </script>
<script src="js/index-home-in.js"></script>
@endsection

