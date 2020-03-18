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
  if(!$('body').hasClass('pc') && $(window).height() < 481){
    $('.visualArea').css('height','80%');
  } else{
    $('.visualArea').css('height','');
  }
  var vHeight = $('.visualArea').outerHeight();
  console.log(vHeight);
  $('.visualSlider .visual').css('height',vHeight+24);
  $('#container').css('padding-top',vHeight);
}
$(window).resize(function(){
  reHeight();
});
