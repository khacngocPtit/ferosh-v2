@extends('master-layout')

@section('title')
	Đăng kí
@endsection

@section('content')

<main id="dangky">
	<div class="container">
		<div class="link">
			<a href="{{route('trang-chu')}}">Trang chủ</a>
			<span>></span>
			<a href="{{route('dk_master')}}">Đăng ký</a>
		</div>
		<h2 class="text-center mt-3">ĐĂNG KÝ</h2>
		<div class="support policy mt-2 ">
			<ul>
				<li><p>Hỗ trợ: <strong>1900 000 000</strong></p></li>
				<li><a href="">Chính sách đổi trả</a></li>
				<li><a href="">Chính sách giao hàng</a></li>
				<li><a href="">Chính sách thanh toán</a></li>
				<li><a href="">Size Guide</a></li>
			</ul>
		</div>
		<div class="form-dky">
			<h2 class="title">
				MỞ TÀI KHOẢN VỚI FEROSH
			</h2>
			<p class="mt-2">Trở thành thành viên của Ferosh nhận các tin tức thời trang trong nước và quốc tế, các chương trình khuyến mại duy nhất chỉ dành cho các thành viên của Ferosh hay là những người đầu tiên được thông báo khi có sản phẩm thiết kế mới. Bạn còn chờ gì nữa?</p>
			<p class="mt-1"><span style="color: red">*</span> Thông tin bắt buộc</p>
			<form action=" " class="form-dk-dn">
				<div class="row">
					<div class="col-md-6">
						<table>
							<tbody>
								<tr>
									<td><p>Email(<span style="color:red">*</span>)</p></td>
									<td><input type="text" ></td>
								</tr>
								<tr>
									<td><p>Mật khẩu(<span style="color:red">*</span>)</p></td>
									<td><input type="password" ></td>
								</tr>
								<tr>
									<td><p>Nhập lại mật khẩu(<span style="color:red">*</span>)</p></td>
									<td><input type="password" ></td>
								</tr>
								<tr>
									<td><p>Địa chỉ(<span style="color:red">*</span>)</p></td>
									<td><input type="text" ></td>
								</tr>
								<tr>
									<td><p>Thành phố(<span style="color:red">*</span>)</p></td>
									<td>
										<select name="country" id="option-address" >
											<option value="name">Hà Nội</option>
											<option value="name">TP. Hồ Chí Minh</option>
											<option value="name">Hà Nội</option>
											<option value="name">Hà Nội</option>
											<option value="name">Hà Nội</option>
											<option value="name">Hà Nội</option>
											<option value="name">Hà Nội</option>
											<option value="name">Hà Nội</option>
										</select>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-6">
						<table>
							<tbody>
								<tr>
									<td><p class="name">Họ và tên(<span style="color:red">*</span>)</p></td>
									<td><input type="text" ></td>
								</tr>
								<tr>
									<td><p class="address">Điện thoại(<span style="color:red">*</span>)</p></td>
									<td><input type="number" ></td>
								</tr>
								<tr class="mt-3">
									<td>Giới tính</td>
									<td class="display-flex">
										<input type="radio" name="sex"><span class="sex">Nam</span>
										<input type="radio" name="sex"><span class="sex">Nữ</span>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="dieukhoan mt-3 mb-3">
							<input type="checkbox">Nhận thông tin về các chương trình khuyến mại và các cập nhật mới từ Ferosh	<br>	
							<input type="checkbox">Nhận thông tin sản phẩm thiết kế mới <br>
						</div>
						<div class="submit-form">	
							<a href="#" class="btn btn-danger">Đăng ký ngay</a>
							<a href="#" class="btn btn-primary">Facebook</a>
						</div>
					</div>
				</div>
			</form>
			
		</div>
	</div>

</main>

@endsection