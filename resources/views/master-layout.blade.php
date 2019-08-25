<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <LINK REL="SHORTCUT ICON"  HREF="{{asset('image/Ferosh_favicon_01.png')}}">
    <base href="{{ asset('') }}">
    <!-- Reset CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap/css/bootstrap.min.css') }}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

   <!-- Font-awesome CSS -->
    <link rel="stylesheet" href="{{ asset('library/fontawesome/css/all.min.css') }}">
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('library/OwlCarousel2/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('library/OwlCarousel2/owl.theme.default.min.css') }}">


    <!-- CUSTOM -->

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bst_master.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dl-dn_master.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tk_master.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dk_master.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dn.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--Font-awesome CSS -->
    <link rel="stylesheet" href="{{ asset('library/fontawesome/css/all.min.css') }}">
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('library/OwlCarousel2/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('library/OwlCarousel2/owl.theme.default.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    @yield('css')

</head>
<body>

  @include('header')

  @yield('content')


	@include('footer')


    <script src="{{ asset('library/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap/js/bootstrap.min.js') }}"></script>  
    <script src="{{ asset('library/OwlCarousel2/owl.carousel.min.js') }}"></script> 
    <script src="{{ asset('js/js-style.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>
<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
@yield('js')

</body>

</html>