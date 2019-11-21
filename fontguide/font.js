$(document).ready(function(){

    $('.btnConfirm').click(function(){
        var inputSize = $('.input .inputSize input[type="text"]').val();
        var inputMent = $('.input .inputMent textarea').val();
        if( inputMent == ""){
            alert("확인하고 싶은 문구를 입력해주세요.");
        } else{
            if(inputSize == ""){
                $('.view table .ment .edit').fadeOut().html(inputMent).fadeIn();
            } else {
                var fontFam;
                var arrFam = new Array;
                $('.view tr:first-child .ment').each(function(index){
                    fontFam = $(this).attr("class");
                    fontFam = fontFam.split("ment ")[1];
                    arrFam[index] = fontFam;
                });

                var tdHtml = "";
                for(var i=0; i<arrFam.length; i++){
                    tdHtml += '<td><div class="ment '+arrFam[i]+'"><span class="edit">'+inputMent+'</span> <strong class="edit">'+inputMent+'</strong></div></td>';
                }

                $('.view table tbody tr:last').after('<tr style="font-size:'+inputSize+'px"><th scope="row">'+inputSize+'</th>'+tdHtml+'</tr>');
            }
        }
    });

    $('.btnToggle').click(function(){
        $(this).parents('.description').children('ol').slideToggle();
    });
});