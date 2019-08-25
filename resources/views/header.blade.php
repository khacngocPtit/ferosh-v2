<header id="header">
  
   <div class="site-heading-area">
        <div class="container">
          <div class="row">
            <span type="button" class="icon-toggle"></span>
            <div class="col-sm-5 col-md-4 col-lg-4">
              <div class="logo">
                <h1 style="margin-top: 10px;">
                  <a href="#"><img class="lazyload" src="{{ asset('image/logo_website.png') }}"/></a>
                </h1>
              </div>
            </div>
            <div class="col-sm-7 col-md-6 col-lg-5 offset-lg-3 offset-md-2">
              <div class="site-heading-right">
                <div class="search">
                  <form action="#" method="">
                    <input type="text" id="txtSearch" class="form-control" name="keywords" value="" placeholder="Tìm kiếm"/>
                    <a href="#" title=""><i class="fas fa-search"></i></a>
                  </form>
                </div>
                <div class="top-menu">
                  <ul>
                    <li class="btntooltip" id="lstitems">
                     <a href="#" style="font-size: 15px;"><i class="fas fa-cart-plus"></i></a>
                     <a href="#" title=""><span class="">Giỏ hàng</span></a>
                    </li>
                    <li class="btntooltip" id="lstwishlist">
                    <a href="#" style="font-size: 15px;"> <i class="fas fa-bell"></i></a>
                    <a href="#"><span class="">Thông báo</span></a>
                    </li>
                    <li><a href="{{ url('/dang-nhap') }}">Đăng nhập</a></li>
                    <li><a href="{{ url('/dk_master') }}">Đăng ký</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
   </div> <!-- end site-heading-area -->
      <!-- End site heading area -->
    <div class="mainmenu-area">
      <div class="container">
          <div class="row">
            <div id="submenus">
            </div> <!-- end submenus -->
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="#" style="display: none;">Navbar</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item bg-red">
                    <a class="nav-link" href="{{ url('/dl-dn_master') }}">SALE <span class="sr-only">(current)</span></a>
                    <div class="sub-menu" style="display: none;">
                      <div class="container">
                        <h3 class="heading back">Back</h3>
                        <span class="line-break"></span>
                        <div class="row">
                          <div class="col-md-2">
                            <h3 class="heading">Chọn theo</h3>
                            <ul>
                              <li>
                                <a href="#" class="d-block">Tất cả sản phẩm</a>
                              </li>
                              <li class=""><a href="{{ url('/dl-dn_master') }}" class="d-block">&Aacute;o</a></li>
                              <li class=""><a href="{{ url('/dl-dn_master') }}" class="d-block">Vali</a></li>
                              <li class=""><a href="{{ url('/dl-dn_master') }}" class="d-block">Đồng hồ</a></li>
                              <li class=""><a href="{{ url('/dl-dn_master') }}" class="d-block">D&eacute;p</a></li>
                              <li class=""><a href="{{ url('/dl-dn_master') }}" class="d-block">T&uacute;i Balo</a></li>
                              <li class=""><a href="{{ url('/dl-dn_master') }}" class="d-block">B&ocirc;ng tai</a></li>
                              <li class=""><a href="{{ url('/dl-dn_master') }}" class="d-block">Nhẫn</a></li>
                              <li class=""><a href="{{ url('/dl-dn_master') }}" class="d-block">Bộ trang sức</a></li>
                              <li class=""><a href="{{ url('/dl-dn_master') }}" class="d-block">&Aacute;o d&agrave;i</a></li>
                              <li class=""><a href="{{ url('/dl-dn_master') }}" class="d-block">&Aacute;o kho&aacute;c</a></li>
                              <li class=""><a href="{{ url('/dl-dn_master') }}" class="d-block">Bộ</a></li>                             
                              <li><a class="view-all" href="{{ url('/dl-dn_master') }}">Xem tất cả...</a></li>
                            </ul>
                          </div>
                          <div class="col2-md">
                            <div class="prod-img1">
                              <a href="{{ url('/dl-dn_master') }}">
                              <img src="{{ asset('image/prod-sale-1.jpg') }}"/>
                              <img src="{{ asset('image/prod-sale-1_1.jpg') }}"/>
                              </a>
                              <div class="content">
                                <a href="{{ url('/dl-dn_master') }}">
                                  <div class="title">
                                    <span>Am Young</span>
                                  </div>
                                  <div class="desc">
                                    <span>AM YOUNG V&aacute;y bodycon cổ lệch Đen <br>
                                    <strike class="color-red"><span class="color-black">900.000 VND</span></strike>
                                    <br>
                                    <span class="color-red">
                                    810.000 VND | Giảm 10%</span>
                                    </span>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="col2-md">
                            <div class="prod-img1">
                              <a href="{{ url('/dl-dn_master') }}">
                              <img src="{{ asset('image/prod-sale-2.jpg') }}"/>
                              <img src="{{ asset('image/prod-sale-2_1.jpg') }}"/>
                              </a>
                              <div class="content">
                                <a href="{{ url('/dl-dn_master') }}">
                                  <div class="title">
                                    <span>Am Young</span>
                                  </div>
                                  <div class="desc">
                                    <span>AM YOUNG V&aacute;y bodycon cổ lệch T&iacute;m <br>
                                    <strike class="color-red"><span class="color-black">900.000 VND</span></strike>
                                    <br>
                                    <span class="color-red">
                                    810.000 VND | Giảm 10%</span>
                                    </span>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="col2-md">
                            <div class="prod-img1">
                              <a href="{{ url('/dl-dn_master') }}">
                              <img src="{{ asset('image/prod-sale-1.jpg') }}"/>
                              <img src="{{ asset('image/prod-sale-1_1.jpg') }}"/>
                              </a>
                              <div class="content">
                                <a href="{{ url('/dl-dn_master') }}">
                                  <div class="title">
                                    <span>Am Young</span>
                                  </div>
                                  <div class="desc">
                                    <span>AM YOUNG V&aacute;y bodycon cổ ngang Đen <br>
                                    <strike class="color-red"><span class="color-black">800.000 VND</span></strike>
                                    <br>
                                    <span class="color-red">
                                    720.000 VND | Giảm 10%</span>
                                    </span>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="col2-md">
                            <div class="prod-img1">
                              <a href="{{ url('/dl-dn_master') }}">
                              <img src="{{ asset('image/prod-sale-2.jpg') }}"/>
                              <img src="{{ asset('image/prod-sale-2_1.jpg') }}"/>
                              </a>
                              <div class="content">
                                <a href="{{ url('/dl-dn_master') }}">
                                  <div class="title">
                                    <span>Am Young</span>
                                  </div>
                                  <div class="desc">
                                    <span>AM YOUNG Ch&acirc;n v&aacute;y đen dập ly Đen <br>
                                    <strike class="color-red"><span class="color-black">500.000 VND</span></strike>
                                    <br>
                                    <span class="color-red">
                                    450.000 VND | Giảm 10%</span>
                                    </span>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div style="clear: both;"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item bg-red">
                    <a class="nav-link" href="{{ url('/dl-dn_master') }}">CRAZY SALE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/dl-dn_master') }}">HÀNG MỚI</a>
                    <div class="sub-menu" style="display: none;">
                      <div class="container">
                        <h3 class="heading back">Back</h3>
                        <span class="line-break"></span>
                        <div class="row">
                          <div class="col-md-2">
                            <h3 class="heading">Chọn theo</h3>
                            <ul>
                              <li>
                                <a href="{{ url('/dl-dn_master') }}" class="d-block">Tất cả sản phẩm</a>
                              </li>
                              <li><a href="{{ url('/dl-dn_master') }}" class="d-block">Tuần n&agrave;y</a></li>
                              <li><a href="{{ url('/dl-dn_master') }}" class="d-block">Tuần trước</a></li>
                              <li><a href="{{ url('/dl-dn_master') }}" class="d-block">Nh&agrave; thiết kế mới</a></li>
                            </ul>
                          </div>
                          <div class="col-md-10">
                            <h3 class="heading">H&Agrave;NG MỚI</h3>
                            <div class="row">
                              <div class="col2-md">
                                <div class="prod-img1">
                                  <a href="#">
                                  <img src="{{ asset('image/prod-new-1.jpg') }}"/>
                                  <img src="{{ asset('image/prod-new-1_1.jpg') }}"/>
                                  </a>
                                  <div class="content">
                                    <a href="#">
                                      <div class="title">
                                        <span>Larita</span>
                                      </div>
                                      <div class="desc">
                                        <span>LARITA Đầm bẹt vai tay d&agrave;i Kerry <br>
                                        650.000 VND </span>
                                      </div>
                                      <span class="product-new">Hàng mới</span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <div class="col2-md">
                                <div class="prod-img1">
                                  <a href="#">
                                  <img src="{{ asset('image/prod-new-2.jpg') }}"/>
                                  <img src="{{ asset('image/prod-new-2_1.jpg') }}"/>
                                  </a>
                                  <div class="content">
                                    <a href="#">
                                      <div class="title">
                                        <span>Larita</span>
                                      </div>
                                      <div class="desc">
                                        <span>LARITA Đầm linen xẻ 1 b&ecirc;n, nơ thắt trước ngực Eva <br>
                                        690.000 VND </span>
                                      </div>
                                      <span class="product-new">Hàng mới</span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <div class="col2-md">
                                <div class="prod-img1">
                                  <a href="#">
                                  <img src="{{ asset('image/prod-new-1.jpg') }}"/>
                                  <img src="{{ asset('image/prod-new-1_1.jpg') }}"/>
                                  </a>
                                  <div class="content">
                                    <a href="#">
                                      <div class="title">
                                        <span>Larita</span>
                                      </div>
                                      <div class="desc">
                                        <span>LARITA Đầm linen xẻ 1 b&ecirc;n, nơ thắt trước ngực Clara <br>
                                        690.000 VND </span>
                                      </div>
                                      <span class="product-new">Hàng mới</span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <div class="col2-md">
                                <div class="prod-img1">
                                  <a href="#">
                                  <img src="{{ asset('image/prod-new-2.jpg') }}"/>
                                  <img src="{{ asset('image/prod-new-2_1.jpg') }}"/>
                                  </a>
                                  <div class="content">
                                    <a href="#">
                                      <div class="title">
                                        <span>Larita</span>
                                      </div>
                                      <div class="desc">
                                        <span>LARITA Đầm sơ mi tay d&agrave;i Jane <br>
                                        750.000 VND </span>
                                      </div>
                                      <span class="product-new">Hàng mới</span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <div class="col2-md">
                                <div class="prod-img1">
                                  <a href="#">
                                  <img src="{{ asset('image/prod-new-1.jpg') }}"/>
                                  <img src="{{ asset('image/prod-new-1_1.jpg') }}"/>
                                  </a>
                                  <div class="content">
                                    <a href="#">
                                      <div class="title">
                                        <span>Larita</span>
                                      </div>
                                      <div class="desc">
                                        <span>LARITA Quần short xắn lai, t&uacute;i hai b&ecirc;n Danny <br>
                                        650.000 VND </span>
                                      </div>
                                      <span class="product-new">Hàng mới</span>
                                    </a>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  </li> <!-- end hàng mới -->

                   <li class="nav-item">
                    <a class="nav-link" href="#">THỜI TRANG</a>
                    <div class="sub-menu" style="display: none;">
                      <div class="container">
                       
                        <span class="line-break"></span>
                        <div class="row">
                          <div class="col-md-2">
                            <h3 class="heading">Chọn theo</h3>
                            <ul>
                              <li><a href="{{ url('/tk-master') }}" class="d-block">Nhà Thiết Kế A-Z</a></li>
                              <li><a href="{{ url('/dl-dn_master') }}" class="d-block">Hàng Mới</a></li>
                              <li><a href="{{ url('/dl-dn_master') }}" class="d-block">Phong Cách</a></li>
                            </ul>
                          </div>
                          <div class="col-md-2">
                            <h3 class="heading">Sản phẩm</h3>
                            <ul>
                              <li>
                                <a href="{{ url('/dl-dn_master') }}" class="d-block">Tất cả sản phẩm</a>
                              </li>
                              <li class="">

                                <a href="#" class="d-block">&Aacute;o</a>
                               
                                
                              </li>
                              <li class="">
                               
                                <a href="#" class="d-block">&Aacute;o d&agrave;i</a>
                               
                               
                              </li>
                              <li class="">
                               
                                <a href="#" class="d-block">&Aacute;o kho&aacute;c</a>
                                
                              </li>
                              <li class="">
                               
                                <a href="#" class="d-block">Bộ</a>

                              </li>
                              <li class="">
                               
                                <a href="#" class="d-block">Ch&acirc;n V&aacute;y</a>
                                
                              </li>
                              <li class="">
                               
                                <a href="#" class="d-block">D&acirc;y chuyền</a>
                              </li>
                              <li class="">
                               
                                <a href="#" class="d-block">Đầm cưới</a>
                              </li>
                              <li class="">
                                
                                <a href="#" class="d-block">Đầm/V&aacute;y liền</a>
                                
                                
                              </li>
                              <li class="">
                               
                                <a href="#" class="d-block">Đồ Bơi</a>
                              </li>
                              <li class="">
                              
                                <a href="#" class="d-block">Đồ Ngủ</a>
                                
                              </li>
                              <li class="">
                                
                                <a href="#" class="d-block">Vest</a>
                              </li>                             
                        
                              <li><a class="view-all" href="#">Xem tất cả...</a></li>
                            </ul>
                          </div>
                          <div class="col-md-4">
                            <h3 class="heading">Nhà thiết kế</h3>
                            <ul class="split-col-2">
                              <li><a href="#" class="d-inline-block">21SIX Fashion</a></li>
                              <li><a href="#" class="d-inline-block">2SEPTEMBER</a></li>
                              <li><a href="#" class="d-inline-block">Ả Boutique</a></li>
                              <li><a href="#" class="d-inline-block">A.I.M Studio</a></li>
                              <li><a href="#" class="d-inline-block">Adeline</a></li>
                              <li><a href="#" class="d-inline-block">Alessieyes</a></li>
                              <li><a href="#" class="d-inline-block">Am Young</a></li>
                              <li><a href="#" class="d-inline-block">Amelia</a></li>                                          
                              <li><a class="view-all" href="#">Xem tất cả...</a></li>
                            </ul>
                          </div>
                          <div class="col-md-4">
                              <div class="prod-img">
                                  <a href="#"><img src="{{ asset('image/prod-fashion-1.jpg') }}" width="200px" height="300px">
                                  </a>
                                  <div class="content">
                                      <a href="#">
                                          <div class="title">Larita</div>
                                          <div class="desc"><a href="">Shop now</a></div> 
                                      </a>
                                </div>
                              </div> 
                          </div>
                        </div>
                      </div>
                    </div>
                  </li> <!-- end thời trang -->

                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href="{{ url('/dl-dn_master') }}">GIÀY & PHỤ KIỆN</a>
                    <div class="sub-menu" style="display: none;">
                      <div class="container">
                        <h3 class="heading back">Back</h3>
                        <span class="line-break"></span>
                        <div class="row">
                          <div class="col-md-2 fisrt-box-hide">
                            <h3 class="heading">Chọn theo</h3>
                            <ul>
                              <li><a href="#" class="d-block">Nhà Thiết Kế A-Z</a></li>
                              <li><a href="#" class="d-block">Hàng Mới</a></li>
                              <li><a href="#" class="d-block">Phong Cách</a></li>
                            </ul>
                          </div>
                          <div class="col-md-2">
                            <h3 class="heading">Sản phẩm</h3>
                            <ul class="menu-child">
                              <li>
                                <a href="#" class="d-block">Tất cả sản phẩm</a>
                              </li>
                              <li class="">
                                
                                <a href="#" class="d-block">Vali</a>
                              </li>
                              <li class="">
                               
                                <a href="#" class="d-block">Đồng hồ</a>
                              </li>
                              <li class="">
                               
                                <a href="#" class="d-block">D&eacute;p</a>
                              </li>
                              <li class="">
                                <span class="d-block drop-menu none-sub">T&uacute;i Balo</span>
                                <a href="#" class="d-block">T&uacute;i Balo</a>
                              </li>
                              <li class="">
                                
                                <a href="#" class="d-block">B&ocirc;ng tai</a>
                              </li>
                              <li class="">
                               
                                <a href="#" class="d-block">Nhẫn</a>
                              </li>
                              <li class="">
                              
                                <a href="#" class="d-block">Bộ trang sức</a>
                              </li>
                              <li class="">
                                
                                <a href="#" class="d-block">Gi&agrave;y</a>
                                
                              
                              </li>
                              <li class="">
                               
                                <a href="#" class="d-block">Phụ Kiện</a>
                                
                              </li>
                              <li class="">
                              
                                <a href="#" class="d-block">T&uacute;i</a>
                                
                              </li>
                            </ul>
                          </div>
                          <div class="col-md-4">
                            <h3 class="heading">Nhà thiết kế</h3>
                            <ul class="split-col-2">
                              <li><a href="{{ url('/tk_master') }}" class="d-inline-block">21SIX Fashion</a></li>
                              <li><a href="{{ url('/tk_master') }}" class="d-inline-block">2SEPTEMBER</a></li>
                              <li><a href="{{ url('/tk_master') }}" class="d-inline-block">Ả Boutique</a></li>
                              <li><a href="{{ url('/tk_master') }}" class="d-inline-block">A.I.M Studio</a></li>
                              <li><a href="{{ url('/tk_master') }}" class="d-inline-block">Adeline</a></li>
                              <li><a href="{{ url('/tk_master') }}" class="d-inline-block">Alessieyes</a></li>
                              <li><a href="{{ url('/tk_master') }}" class="d-inline-block">Am Young</a></li>
                              <li><a href="{{ url('/tk_master') }}" class="d-inline-block">Amelia</a></li>
                              <li><a class="view-all" href="nha-thiet-ke.html">Xem tất cả...</a></li>
                            </ul>
                          </div>
                          <div class="col-md-4">
                           <div class="prod-img">
                                <a href="#"><img src="https://ferosh.vn/uploads/16-08-2019/VK19017-AC-Black--1-(1).jpg" width="200px" height="300px">
                                </a>
                                <div class="content">
                                    <a href="#">
                                        <div class="title">VICLUXY</div>
                                        <div class="desc"><a href="#">Shop now</a></div> 
                                    </a>
                                </div>
                          </div> 
                          </div>
                        </div>
                      </div>
                    </div>
                  </li> <!-- end giày, phụ kiện -->
                 
                   <li class="nav-item">
                    <a class="nav-link" href="#">PHONG CÁCH</a>

                     <div class="sub-menu" style="display: none;">
                      <div class="container">
                        <h3 class="heading back">Back</h3>
                        <span class="line-break"></span>
                        <div class="row">
                          <div class="col-md-2 fisrt-box-hide">
                            <h3 class="heading">Chọn theo</h3>
                            <ul>
                              <li><a href="#">Nhà Thiết Kế A-Z</a></li>
                              <li><a href="#">Hàng Mới</a></li>
                              <li><a href="#">Phong Cách</a></li>
                            </ul>
                          </div>
                          <div class="col-md-2">
                            <h3 class="heading">Sản phẩm</h3>
                            <ul class="menu-child">
                              <li>
                                <a href="#" class="d-block">Tất cả sản phẩm</a>
                              </li>
                              <li class="">
                                
                                <a href="#" class="d-block">&Aacute;o</a>
                               
                              </li>
                              <li class="">
                                
                                <a href="#" class="d-block">&Aacute;o d&agrave;i</a>
                                
                              </li>
                              <li class="">
                               
                                <a href="#" class="d-block">&Aacute;o kho&aacute;c</a>
                                
                              </li>
                              <li class="">
                              
                                <a href="#" class="d-block">Bộ</a>
                                
                              </li>
                              <li class="">
                               
                                <a href="#" class="d-block">Ch&acirc;n V&aacute;y</a>
                             
                              </li>
                              <li class="">
                             
                                <a href="#" class="d-block">Đầm cưới</a>
                              </li>
                              <li class="">
                                
                                <a href="#" class="d-block">Đầm/V&aacute;y liền</a>
                               
                              </li>
                              <li class="">
                             
                                <a href="#" class="d-block">Vest</a>
                              </li>
                              <li class="">
                               
                                <a href="#" class="d-block">Quần</a>
                              
                              </li>
                            </ul>
                          </div>
                          <div class="col-md-4">
                            <h3 class="heading">Nhà thiết kế</h3>
                            <ul class="split-col-2">
                              <li><a href="#" class="d-inline-block">21SIX Fashion</a></li>
                              <li><a href="#" class="d-inline-block">2SEPTEMBER</a></li>
                              <li><a href="#" class="d-inline-block">Ả Boutique</a></li>
                              <li><a href="#" class="d-inline-block">A.I.M Studio</a></li>
                              <li><a href="#" class="d-inline-block">Adeline</a></li>
                              <li><a href="#" class="d-inline-block">Alessieyes</a></li>
                              <li><a href="#" class="d-inline-block">Am Young</a></li>
                                                 
                              <li><a class="view-all" href="#">Xem tất cả...</a></li>
                            </ul>
                          </div>
                          <div class="col-md-4">
                              <div class="prod-img">
                              <a href="#">                                                                                      <img src="https://ferosh.vn/uploads/08-07-2019/A---hai-d--y-c----------V--ng-299-3-copy(1).jpg" width="200px" height="300px">
                              </a>
                              <div class="content">
                                  <a href="#">
                                      <div class="title">Honey Design</div>
                                      <div class="desc"><a href="">Shop now</a></div> 
                                  </a>
                              </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="#">ĐỒ LÓT & ĐỒ NGỦ</a>
                  </li> <!-- end dồ lót và đồ ngủ -->

                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/bst_master') }}">BỘ SƯU TẬP</a>
                  </li> <!-- end bộ st -->

                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/tk_master') }}">NHÀ THIẾT KẾ</a>

                    <div class="sub-menu" style="display: none;">
                      <div class="container">
                        <h3 class="heading back">Back</h3>
                        <span class="line-break"></span>
                        <div class="row">
                          <div class="col-md-2 fisrt-box-hide">
                            <h3 class="heading">Chọn theo</h3>
                            <ul>
                              <li><a href="#" class="d-block">Nhà Thiết Kế A-Z</a></li>
                              <li><a href="#" class="d-block">Quần &aacute;o thiết kế</a></li>
                              <li><a href="#" class="d-block">Giầy thiết kế</a></li>
                              <li><a href="#" class="d-block">T&uacute;i v&agrave; phụ kiện thiết kế</a></li>
                              <li><a href="#" class="d-block">Trang sức thiết kế</a></li>
                              <li><a href="#" class="d-block">Mỹ phẩm</a></li>
                              <li><a href="#" class="d-block">Đồng hồ</a></li>
                            </ul>
                          </div>
                          <div class="col-md-6">
                            <h3 class="heading">Nhà thiết kế</h3>
                            <ul class="split-col-2">
                              <li><a href="#" class="d-inline-block">21SIX Fashion</a></li>
                              <li><a href="#" class="d-inline-block">2SEPTEMBER</a></li>
                              <li><a href="#" class="d-inline-block">Ả Boutique</a></li>
                              <li><a href="#" class="d-inline-block">A.I.M Studio</a></li>
                              <li><a href="#" class="d-inline-block">Adeline</a></li>
                              <li><a href="#" class="d-inline-block">Alessieyes</a></li>
                              <li><a href="#" class="d-inline-block">Am Young</a></li>
                            
                              <li><a class="view-all" href="#">Xem tất cả...</a></li>
                            </ul>
                          </div>
                          <div class="col-md-4">
                           <div class="prod-img">
                              <a href="#"><img src="https://ferosh.vn/uploads/19-06-2019/2(1).png" width="200px" height="300px">
                              </a>
                              <div class="content">
                                  <a href="#">
                                      <div class="title">Ferosh Editor</div>
                                      <div class="desc"><a href="">Shop now</a></div> 
                                  </a>
                              </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>                 
                  </li> <!-- end nhà thiết kế -->

                </ul>             
              </div>
            </nav>
          </div>
      </div>   
   </div> <!-- end mainmenu-area -->
  <div class="menu-mobile-button" style="display: none;"><i class="fas fa-bars"></i>
       
  </div>
 

 
</header><!-- /header -->
<section class="menu-mobile">
   
    <div class="menu-mobile-box">
        <div class="menu-mobile-content">
            <div class="menu-left">
                <div class="menu-left-title">
                    <h3>FEROSH</h3>
                </div>
                <div class="menu-left-content">

                    <ul class="menu-left-ul-lv-1">
                        <li><a href="#">Về Trang chủ</a></li>
                        <li><a href="#">Sale</a></li>
                        <li><a href="#">Crazy Sale</a></li>
                        <li><a href="#">Hàng Mới</a></li>
                        <li>
                            <a href="#" class="menu-hover">Thời trang</a>
                           <i class="fas fa-arrow-alt-circle-down"></i>
                            <ul class="menu-left-ul-lv-child">
                                <li><a href="#">Áo</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a href="#">Áo dài</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a href="#">Áo khoác</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a href="#">Bộ</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a href="#">Chân váy</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a href="#">Dây chuyền</a></li>   
                                <div class="dropdown-divider"></div>                           
                                <li><a href="#">Xem tất cả</a></li>                              
                            </ul>
                        </li>
                        <li><a href="#">Giày & phụ kiện</a>
                         
                        </li>
                        <li><a href="#">Phong cách</a></li>
                        <li><a href="#">Đồ lót & đồ ngủ</a></li>
                        <li><a href="#">Bộ sưu tập</a></li>
                        <li><a href="#">Nhà thiết kế</a></li>
                    </ul>

                </div> <!-- menu-left-content -->
            </div> <!-- menu-left -->
         
        </div>
    </div>
   
</section>
