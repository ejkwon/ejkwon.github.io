var filter = "win16|win32|win64|mac"; // PC

$(function(){
  // device
  var fPlatform = navigator.platform
    , fUserAgent = navigator.userAgent; // userAgent 값에 iPhone, iPad, ipot, Android 존재하면 모바일로 간주
  if(fPlatform != null && fPlatform != undefined && filter.indexOf(fPlatform.toLowerCase()) >= 0){
    // PC
    if (fUserAgent.indexOf("iPhone") > 0 || fUserAgent.indexOf("iPad") > 0 || fUserAgent.indexOf("iPot") > 0 || fUserAgent.indexOf("Android") > 0) {
      // Mobile
    } else {
      // PC
      $('body').addClass('pc');
    }
  } else {
    // Mobile
  }
  
  // agree
  $('body').on('change', '.agreeAll .fCheck', function(){
    var bln = $(this).is(':checked');
    $('.agreeInner').find('.fCheck').prop('checked', bln);
  }).on('change', '.agreeInner .fCheck', function(){
    var allChk = $('.agreeAll .fCheck')
      , allLen = $('.agreeInner').find('.fCheck').length
      , chkLen = $('.agreeInner').find('.fCheck:checked').length;
   (allLen == chkLen) ? allChk.prop('checked', true) : allChk.prop('checked', false);
  });

  // layerPopup
  $('body').on('click', '.layerPopup .popClose', function(){
    layerPopClose($(this).closest('.layerPopup'));
  });

  if($('.layerPopup.on').length > 0){
    var target = $('.layerPopup.on .layerWrap');
    $('body').css('overflow', 'hidden');
    target.css({'top':'50%','margin-top':-(target.height()/2)});
  }
});

//layer popup
function layerOpen(target){
  var targetId = $('#'+target),
      targetLayer = targetId.find('.layerWrap');
  $('body').css('overflow', 'hidden');
  targetId.addClass('on');
  targetLayer.css({'top':'50%','margin-top':-(targetLayer.height()/2)});
}
function layerPopClose(target){
  $('body').css('overflow', '');
  target.removeClass('on');
}
