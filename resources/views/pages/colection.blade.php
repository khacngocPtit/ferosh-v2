@extends('master-layout')


@section('title')
Bộ sưu tập 
@endsection

@section('css')
 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />	
<link rel="stylesheet" type="text/css" href="{{asset('css/collection.css')}}">

@endsection



@section('content')
<main>
	<div class="container">
		<div id="carouselExampleIndicators" class="carousel slide banner-top" data-ride="carousel">
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
		<div class="row">
			<div class="col-md-3 set">
				<ul>
					<li class="set-title">Bộ lọc</li>
					<li><a href="#">21SIX Fashion</a> <span style="float:right;"><i class="fas fa-chevron-right"></i></span></li>
					<li><a href="#">21SIX Fashion</a> <span style="float:right;"><i class="fas fa-chevron-right"></i></span></li>
					<li><a href="#">21SIX Fashion</a> <span style="float:right;"><i class="fas fa-chevron-right"></i></span></li>
					<li><a href="#">21SIX Fashion</a> <span style="float:right;"><i class="fas fa-chevron-right"></i></span></li>
					<li><a href="#">21SIX Fashion</a> <span style="float:right;"><i class="fas fa-chevron-right"></i></span></li>
					<li><a href="#">21SIX Fashion</a> <span style="float:right;"><i class="fas fa-chevron-right"></i></span></li>
					<li><a href="#">21SIX Fashion</a> <span style="float:right;"><i class="fas fa-chevron-right"></i></span></li>
					<li><a href="#">21SIX Fashion</a> <span style="float:right;"><i class="fas fa-chevron-right"></i></span></li>
					<li><a href="#">21SIX Fashion</a> <span style="float:right;"><i class="fas fa-chevron-right"></i></span></li>
					<li><a href="#">21SIX Fashion</a> <span style="float:right;"><i class="fas fa-chevron-right"></i></span></li>
					<li><a href="#">21SIX Fashion</a> <span style="float:right;"><i class="fas fa-chevron-right"></i></span></li>
				</ul>

			</div>
			<div class="col-md-9">
				<div class="cat-title-gray" data-aos="fade-right">
					<div class="divider"></div>
					<div class="statistical">Có hơn 400 sản phẩm</div>
				</div>
				<div class="row">
					<div class="col-md-4" data-aos="fade-down-right">
						<div class="imgs-designer">
							<a href="#"><img  class="hover-imgs active" src="{{asset('image/14.png')}}" alt=""></a>
						</div>
						<div class="title"><a href="#">Ferosh Editor</a></div>
						<p class="decs">Bộ sưu tập BACK TO SCHOOL</p>
					</div>
					<div class="col-md-4" data-aos="flip-left">
						<div class="imgs-designer">
							<a href="#"><img  class="hover-imgs active" src="{{asset('image/14.png')}}" alt=""></a>
						</div>
						<div class="title"><a href="#">Ferosh Editor</a></div>
						<p class="decs">Bộ sưu tập BACK TO SCHOOL</p>
					</div>
					<div class="col-md-4" data-aos="fade-down-left">
						<div class="imgs-designer">
							<a href="#"><img  class="hover-imgs active" src="{{asset('image/14.png')}}" alt=""></a>
						</div>
						<div class="title"><a href="#">Ferosh Editor</a></div>
						<p class="decs">Bộ sưu tập BACK TO SCHOOL</p>
					</div>
				</div>
				<div class="tab-list">
					<ul >
						<li><a href="#"><i class="fas fa-caret-left"></i></a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#"><i class="fas fa-caret-right"></i></a></li>
					</ul>
				</div>
				<div class="cat-title-gray" data-aos="fade-right">
					<div class="divider"></div>
					<div class="statistical">Có hơn 400 sản phẩm</div>
				</div>
				<div class="row">
					<div class="col-md-4" data-aos="fade-right">
						<div class="imgs-designer">
							<a href="#"><img  class="hover-imgs active" src="{{asset('image/14.png')}}" alt=""></a>
						</div>
						<div class="title"><a href="#">Ferosh Editor</a></div>
						<p class="decs">Bộ sưu tập BACK TO SCHOOL</p>
					</div>
					<div class="col-md-4" data-aos="flip-down">
						<div class="imgs-designer">
							<a href="#"><img  class="hover-imgs active" src="{{asset('image/14.png')}}" alt=""></a>
						</div>
						<div class="title"><a href="#">Ferosh Editor</a></div>
						<p class="decs">Bộ sưu tập BACK TO SCHOOL</p>
					</div>
					<div class="col-md-4" data-aos="fade-left">
						<div class="imgs-designer">
							<a href="#"><img  class="hover-imgs active" src="{{asset('image/14.png')}}" alt=""></a>
						</div>
						<div class="title"><a href="#">Ferosh Editor</a></div>
						<p class="decs">Bộ sưu tập BACK TO SCHOOL</p>
					</div>
				</div>
				<div class="tab-list">
					<ul >
						<li><a href="#"><i class="fas fa-caret-left"></i></a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#"><i class="fas fa-caret-right"></i></a></li>
					</ul>
				</div>
				<div class="cat-title-gray" data-aos="fade-left">
					<div class="divider"></div>
					<div class="statistical">Với các mẫu giầy khác nhau</div>
				</div>
				<div class="row">
					<div class="col-md-4 " data-aos="fade-right">
						<div class="imgs-designer">
							<a href="#"><img  class="hover-imgs active" src="{{asset('image/14.png')}}" alt=""></a>
						</div>
						<div class="title"><a href="#">Ferosh Editor</a></div>
						<p class="decs">Bộ sưu tập BACK TO SCHOOL</p>
					</div>
					<div class="col-md-4" data-aos="fade-down">
						<div class="imgs-designer">
							<a href="#"><img  class="hover-imgs active" src="{{asset('image/14.png')}}" alt=""></a>
						</div>
						<div class="title"><a href="#">Ferosh Editor</a></div>
						<p class="decs">Bộ sưu tập BACK TO SCHOOL</p>
					</div>
					<div class="col-md-4" data-aos="fade-left">
						<div class="imgs-designer">
							<a href="#"><img  class="hover-imgs active" src="{{asset('image/14.png')}}" alt=""></a>
						</div>
						<div class="title"><a href="#">Ferosh Editor</a></div>
						<p class="decs">Bộ sưu tập BACK TO SCHOOL</p>
					</div>
				</div>	
				<div class="tab-list">
					<ul >
						<li><a href="#"><i class="fas fa-caret-left"></i></a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#"><i class="fas fa-caret-right"></i></a></li>
					</ul>
				</div>
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
<script src="js/collection.js"></script>
@endsection

