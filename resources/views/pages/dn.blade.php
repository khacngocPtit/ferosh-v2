@extends('master-layout')

@section('title')
	Đăng nhập
@endsection

@section('content')
<main>
		<div class="menutren"  style="margin-bottom: 20px;">
		<div class="container">
			<div class="row">
				<div class="col-4-lg">
					<div class="menu mt-4 a mb-4">
					<ul>
						<li><a href="" class="a">Trang chủ</a></li>
						<li><i class="fas fa-caret-right"></i></li>
						<li><a href="">Đăng nhập</a></li>
					</ul>
				</div>
				    </div>
			</div>
		</div>
	</div>
	<div class="dangki">
		<div class="container">
			<div class="row">
				<div class="col-12 dangki">
					<p>Đăng nhập</p>
				</div>
			</div>
		</div>
	</div>
	<div class="trogiup">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 trogiupt mt-4">
				<ul>
					<li style="border-left: none;">Trợ giúp? 1900 636 517</li>
					<li><a href="">Chính sách đổi trả</a></li>
					<li><a href="">Chính sách giao hàng</a></li>
					<li><a href="">Chính sách thanh toán</a></li>
					<li><a href="">Size Guide</a></li>
				</ul>
			</div>
			<div class="col-12">
				<hr style="height: 0,5px;background-color:black">
			</div>
		</div>
	</div>
</div>
<div class="dn">
<div class="container">
<div class="box-gray relative">
		<div class="row">
			<div class="col-12 col-md-8 aaa">
				<p class="title">KHÁCH HÀNG ĐÃ CÓ TÀI KHOẢN</p>
				<p class="a">Nếu bạn đã có tài khoản tại FEROSH, vui lòng đăng nhập tại đây.<br/>
	 Chú ý: Nếu bạn mới chỉ đăng ký theo dõi bản tin hàng tuần mà vẫn chưa đăng ký tài khoản thành viên, vui lòng đăng ký bên dưới.
				</p>
	            <form>
	            	<label>Email *&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
	            	<input type="text" name=""><br/>
	            	<label>Mật khẩu *&nbsp</label>
	            	<input type="pass" name="">
	            </form>
			</div>
			<div class="col-12 col-md-4 dnn">
				
				<button class="btn btn-black mb-4 ">Đăng nhập ngay</button>
					<button class="btn btn-fb">FACEBOOK LOGIN</button>

			</div>
			</div>
</div>
</div>
</div>

<div class="dkc">
	<div class="container">
<div class="box-gray relative">
		<div class="row">
			<div class="col-12 col-md-8 aaa">
				<p class="title">BẠN CHƯA ĐĂNG KÝ TÀI KHOẢN?</p>
				<p class="a">Nếu bạn mới đến FEROSH, vui lòng chọn “ĐĂNG KÝ NGAY”
				</p>
			</div>
			<div class="col-12 col-md-4 dnn">
				
				<button class="btn btn-black mb-4 ">Đăng nhập ngay</button>
					<button class="btn btn-fb">FACEBOOK LOGIN</button>

			</div>
			</div>
</div>
</div>
</div>
</div>
<div class="dmk">
	<div class="container">
<div class="box-gray relative">
		<div class="row">
			<div class="col-12 col-md-8 aaa">
				<p class="title">QUÊN MẬT KHẨU?</p>
				<p class="a">Nếu bạn quên mật khẩu, vui lòng chọn “ĐỐI MẬT KHẨU” và làm theo hướng dẫn
				</p>
			</div>
			<div class="col-12 col-md-4 dnn">
				
				<button class="btn btn-black  ">Đổi mật khẩu</button>
					

			</div>
			</div>
</div>
</div>
</div>
</div>
</main>
@endsection