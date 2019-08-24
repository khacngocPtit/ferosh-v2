@extends('master-layout')


@section('title')
Chi tiết sản phẩm
@endsection

@section('css')

<link rel="stylesheet" href="{{asset('sanpham.css')}}">
 
@endsection



@section('content')

<main>
	<div class="contaner">
		<div class="row">
			<div class="col-md-4">
				<div class="danh-sach-san-pham">
					<div class="title-danh-sach">
						<h3 class="pt-2 text-center">Danh mục sản phẩm</h3>
						<i class="fas fa-minus"></i>
					</div>
					<ul>
						<li><a href="#">Áo khoác (50)</a></li>
						<li>
							<a href="#">Áo dài (100)</a>
						</li>
						<li>
							<a href="#">Áo dài (100)</a>
						</li>
						<li>
							<a href="#">Áo dài (100)</a>
						</li>
						<li>
							<a href="#">Áo dài (100)</a>
						</li>
						<li>
							<a href="#">Áo dài (100)</a>
						</li>
						<li>
							<a href="#">Đồ lót (100)</a>
						</li>
						<li>
							<a href="#">Thời trang (100)</a>
						</li>
						<li><a href="#">Giày (100)</a></li>
						
						<li><a href="#">Túi xách (100)</a></li>
					</ul>
				</div>
				<div class="price">
					
				</div>
				<div class="size">
					
				</div>
			</div>
			<div class="col-md-8">
				
			</div>
		</div>
	</div>
</main>

@endsection



@section('js')

@endsection
