$(function(){
   // visual
   $('.visualSlider').slick({
     slidesToShow: 1,
     slidesToScroll: 1,
     //autoplay : true,
     autoplaySpeed : 2000,
     dots: true,
     arrows: false
   });
   reHeight();

});

function reHeight(){
  var vHeight = $('.visualSlider').outerHeight();
  $('.visualSlider .visual').css('height',vHeight+24);
  $('#container').css('padding-top',vHeight);
}
$(window).resize(function(){
  reHeight();
});
