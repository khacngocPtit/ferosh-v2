$(".service__silder").slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  dots: false,
  arrows: true,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 3000,
  speed: 500,
  responsive: [
  {
    breakpoint: 991,
    settings: {
      slidesToShow: 4,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 767,
    settings: {
      slidesToShow: 4,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 575,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1
    }
  }
  ]
});
