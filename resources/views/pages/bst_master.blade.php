@extends('master-layout')

@section('title')
	Bộ sưu tập
@endsection

@section('content')
<main>
	<div class="slider">
		<div class="container">
			<div class="w3-content w3-section">
            <img class="mySlides" src="{{ asset('images/banner.jpg') }}">
            <img class="mySlides" src="{{ asset('images/banner1.jpg') }}" >
            <img class="mySlides" src="{{ asset('images/banner2.jpg') }}">
            <img class="mySlides" src="{{ asset('images/banner3.jpg') }}">
            <img class="mySlides" src="{{ asset('images/banner4.jpg') }}">
            </div>
	    </div>
	</div>
	<div class="menutren"  style="margin-bottom: 20px;">
		<div class="container">
			<div class="row">
				<div class="col-4-lg">
					<div class="menu mt-4 a mb-4">
					<ul>
						<li><a href="" class="a">Trang chủ</a></li>
						<li><i class="fas fa-caret-right"></i></li>
						<li><a href="">Nhà thiết kế</a></li>
					</ul>
				</div>
				    </div>
			</div>
		</div>
	</div>
	<div class="top">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="dropdown">
                         <div class="dropbtn">
                         	<p>Bộ lọc</p>
                         </div>
                          <div class="dropdown-content">
                          	<h3>Nhà thiết kế</h3>
                          	<ul>
                           <li><a href="#">21SIX Fashion</a></li>
                           <li><a href="#">A.I.M Studio</a></li>
                           <li><a href="#">Adeline</a></li>
                           <li><a href="#">Am Young</a></li>
                           <li><a href="#">Amelia</a></li>
                           <li><a href="#">Angeli Pham</a></li>
                           <li><a href="#">BAESICSTORE</a></li>
                           <li><a href="#">Bleu Blue</a></li>
                           <li><a href="#">C'est La V</a></li>
                           <li><a href="#">CÀ CỘ Design</a></li>
                           <li><a href="#">CACDEMODE</a></li>
                           <li><a href="#">Cashew</a></li>
                           <li><a href="#">CCCD by Thanh Thuy</a></li>
                           <li><a href="#">CECY</a></li>
                           <li><a href="#">Am Young</a></li>
                           <li><a href="#">Amelia</a></li>
                           <li><a href="#">Angeli Pham</a></li>
                           <li><a href="#">BAESICSTORE</a></li>
                           <li><a href="#">Bleu Blue</a></li>
                           <li><a href="#">C'est La V</a></li>
                           <li><a href="#">CÀ CỘ Design</a></li>
                       </ul>
                    </div>
                </div>
				</div>
				<div class="col-lg-4 text-center">
					<h3>Bộ sưu tập</h3>
				</div>
				<div class="col-lg-4">
					<div class="pagination">
                    <a href="#"><i class="fas fa-caret-left"></i>
</a>
                    <a href="#" class="active">1</a>
                    <a  href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#"><i class="fas fa-caret-right"></i></a>
</div>
			    </div>
		</div>
	</div>
	<div class="hr">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 text-center size-15 hr">
				<p>Có 320 bộ sưu tập</p>
				<hr>
			</div>
		</div>
	</div>
</div>
<div class="content">
	<div class="container">
		<div class="row">
		<div class="col-sm-12 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <a href=""><img class="pic-1" src="{{ asset('images/1.jpg') }}"></a>
                        <img class="pic-2" src="{{ asset('images/2.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
        </div> 
		<div class="col-sm-12 col-md-6 col-lg-3 mb-4 ">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/5.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/6.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">ELLY</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
        </div>
		<div class="col-sm-12 col-md-6 col-lg-3 mb-4">
	           <div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/13.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/10.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">H&T FASHION</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/11.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/12.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">ETERNITE</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/14.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/15.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LARITA</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/16.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/100.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/18.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/20.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/21.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/22.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/23.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/24.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/25.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/26.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/27.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/28.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/29.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                   <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                   <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                   <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                   <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                   <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mb-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><a href="">ELLY BST THÁNG 8</a></div>
                </div>
            </div>
		</div>
	</div>
	</div>
</div>
</main>
@endsection