@extends('master-layout')

@section('title')
	Đồ lót & đồ ngủ
@endsection

@section('content')
<main>
	<div class="slider">
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
			<div class="w3-content w3-section">
            <a href=""><img class="mySlides" src="{{ asset('images/hihi.jpg') }}"></a>
            <a href=""><img class="mySlides" src="{{ asset('images/banner1.jpg') }}" ></a>
            <a href=""><img class="mySlides" src="{{ asset('images/banner2.jpg') }}"></a>
            <a href=""><img class="mySlides" src="{{ asset('images/banner3.jpg') }}"></a>
            <a href=""><img class="mySlides" src="{{ asset('images/banner4.jpg') }}"></a>
            </div>
            </div>
            </div>
	    </div>
	</div>
	<div class="sanpham">
		<div class="container">
			<div class="row">
				<div class="col-4-lg">
					<div class="sp mt-4 a mb-4">
					<ul>
						<li><a href="" class="a">Trang chủ</a></li>
						<li><i class="fas fa-caret-right"></i></li>
						<li><a href="">Đồ lót & đồ ngủ</a></li>
					</ul>
				</div>
				    </div>
			</div>
		</div>
	</div>
	<div class="paging-top row">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 mt-4">
					<select class="option">
						<option>Sắp xếp theo</option>
						<option>Giá tăng dần</option>
						<option>Giá giảm dần</option>
						<option>Hàng mới</option>
					</select>
					<a href="" class="record-number ">15</a>
					<a href="" class="record-number ">30</a>
					<a href="" class="record-number ">45</a>
					<a href="" class="record-number ">60</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="cat-name">
			<div class="text-center ld-product-type" id="tag-filter">
				<span class="spt active">Bộ sưu tập</span>
				<span class="slit"></span>
				<span class="spt">Sản phẩm</span>
			</div>
		</div>
	</div>
	<div class="hr">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 text-center size-15 hr mt-4">
				<p>Có 142 sản phẩm</p>
				<hr>
			</div>
		</div>
	</div>
</div>
<div class="dolotdongu">
	<div class="container">
		<div class="row">
		<div class="col-lg-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p>Đồ ngủ</p>
					</div>
					<div class="col-lg-12 ">
						<hr style="height: 0,5px;background-color:black">
					</div>
					<div class="col-lg-12">
						<h5 style="float: left;">Nhà thiết kế</h5>
						<p style="float: right;"><a href="" style="color: #000">Xóa</a></p>
					</div>
					<div class="slimScrollDiv" style="position: relative; overflow:scroll; width:100%; height: 255px;">
						<ul style="height: 255px;">
							<li>
								<div class="checkbox"><span><a href="">21SIX Fashion</a></span></div>
							</li>
							<li>
								<div class="checkbox"><span><a href="">21SIX Fashion</a></span></div>
							</li>
							<li>
								<div class="checkbox"><span><a href="">21SIX Fashion</a></span></div>
							</li>
							<li>
								<div class="checkbox"><span><a href="">21SIX Fashion</a></span></div>
							</li>
							<li>
								<div class="checkbox"><span><a href="">21SIX Fashion</a></span></div>
							</li>
							<li>
								<div class="checkbox"><span><a href="">21SIX Fashion</a></span></div>
							</li>
							<li>
								<div class="checkbox"><span><a href="">21SIX Fashion</a></span></div>
							</li>
							<li>
								<div class="checkbox"><span><a href="">21SIX Fashion</a></span></div>
							</li>
							<li>
								<div class="checkbox"><span><a href="">21SIX Fashion</a></span></div>
							</li>
							<li>
								<div class="checkbox"><span><a href="">21SIX Fashion</a></span></div>
							</li>
							<li>
								<div class="checkbox"><span><a href="">21SIX Fashion</a></span></div>
							</li>
							<li>
								<div class="checkbox"><span><a href="">21SIX Fashion</a></span></div>
							</li>
							<li>
								<div class="checkbox"><span><a href="">21SIX Fashion</a></span></div>
							</li>
							<li>
								<div class="checkbox"><span><a href="">21SIX Fashion</a></span></div>
							</li>
							<li>
								<div class="checkbox"><span><a href="">21SIX Fashion</a></span></div>
							</li>
							<li>
								<div class="checkbox"><span><a href="">21SIX Fashion</a></span></div>
							</li>
							<li>
								<div class="checkbox"><span><a href="">21SIX Fashion</a></span></div>
							</li>
							<li>
								<div class="checkbox"><span><a href="">21SIX Fashion</a></span></div>
							</li>
							<li>
								<div class="checkbox"><span><a href="">21SIX Fashion</a></span></div>
							</li>
							<li>
								<div class="checkbox"><span><a href="">21SIX Fashion</a></span></div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-12 mt-4 ">
						<hr style="height: 0,5px;background-color:black">
			</div>
			<div class="col-lg-12 mb-4">
						<h5 style="float: left;">Giá</h5>
						<p style="float: right;"><a href="" style="color: #000">Xóa</a></p>
			</div>
            <div class="col-lg-12 mt-4">
                <div class="slidecontainer">
                    <p class="gia">0   ~    <span id="demo"></span></p>
                 <input type="range" min="1" max="1000000000" value="6000000" class="slider" id="myRange">
                 </div>
            </div>
             <div class="col-lg-12 mb-4">
                        <hr style="height: 0,5px;background-color:black;width: 100%;">
            </div>
            <div class="col-lg-12">
                        <h5 style="float: left;">SIZE</h5>
                        <p style="float: right;"><a href="" style="color: #000">Xóa</a></p>
                    </div>
            <div class="col-lg-12 box" style="position: relative; overflow:scroll; width:100%; height: 255px;display: flex;">
                <div class="col-lg-6 box1 col-md-6 col-xs-6 col-sm-6" style="float: left;">
                    <ul style="height: 255px;">
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX </a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX </a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX </a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX </a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                        </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6" style="float: right;">
                    <ul style="height: 255px;">
                            <li>
                                <div class="checkbox"><span><a href="">21SIX </a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX </a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX </a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            <li>
                                <div class="checkbox"><span><a href="">21SIX</a></span></div>
                            </li>
                            
                        </ul>
                </div>
            </div>
		    </div>
		<div class="col-lg-9 col-md-12 mt-4">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                </div>
            </div>
					</div>
					<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                </div>
						
					</div>
					
				</div>
              <div class="col-lg-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
                          </div>
                    
					</div>
					<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>

                          </div>
                    
			    </div>
			    	<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
		    </div>
		</div>
			<div class="col-lg-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
	</div>
</div>
<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
	</div>
</div>
<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
	</div>
</div>
<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
	</div>
</div>
<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
	</div>
</div>
<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
	</div>
</div>
<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
	</div>
</div>
<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
	</div>
</div>
<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
	</div>
</div>
<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
	</div>
</div>
<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
	</div>
</div>
<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
	</div>
</div>
<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
	</div>
</div>
<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
	</div>
</div>
<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
	</div>
</div>
<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
	</div>
</div>
<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
	</div>
</div>
<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
	</div>
</div>
<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
	</div>
</div>
<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
	</div>
</div>
<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
	</div>
</div>
<div class="col-sm-12 col-lg-4 mb-4">
						<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/33.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/16.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">EMWEAR Váy Tanya </a></h3>
                    <div class="price">
                        1.090.000 VND
                        <span>1.290.000 VND</span>
                    </div>
                    <a class="add-to-cart" href="">Hàng mới</a>
                                </div>
	</div>
</div>
</main>
@endsection