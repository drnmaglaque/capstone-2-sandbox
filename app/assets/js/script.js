$(document).ready(function(){

  //Carousel Featured
  $(".carousel-featured").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true,
    centerMode: true,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      } 
    },
    {
      breakpoint: 480,
      settings: {
        autoplay: false,
        centerMode: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerPadding: '-100px'
      }
    }]
  });


});

