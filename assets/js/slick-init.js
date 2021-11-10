$(document).ready(function(){
  function slideProduct(){
    var widthScreen=window.screen.width;
    if (widthScreen<570) {
      $('.custom-product-slick').slick({
       dots: true,
       infinite: true,
       speed: 100,
       slidesToShow: 1,
       adaptiveHeight: true,
       autoplay:true
     });
    } else {
      $('.custom-product-slick').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
    }

  }

  slideProduct();
})


