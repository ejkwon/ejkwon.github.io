// search project
$.fn.searchProject = function(text){
    if(!text){
        $('#guideTree > li').show();
    } else {
        var len = $('#guideTree > li > a:contains('+ text +')').length;
        $('#guideTree > li').hide();
        $('#guideTree > li > a:contains('+ text +')').each(function(){
           $(this).parents().show(); 
        });
    }
}

// get project type
$.fn.projectList = function(root, ptype, pname){
    var project = {
        init: function(){
            $(function(){
                if(ptype == 'PC'){
                    var file = root + '/lib/pc.xml';
                    ptype = 'pc';
                } else if(ptype == 'MOBILE'){
                    var file = root + '/lib/mobile.xml';
                    ptype = 'mobile';
                }
                project.getData(file, ptype, pname);
            });
        },
        getData : function(file, folderType, projectName){
            $.ajax({
                type : 'GET',
                url : file,
                dataType : 'xml',
                success : function(xml){
                    var projectList = $(xml).find('project');
                    var treeMenu = '';
                    var projectLength = projectList.length - 1;
                    projectList.each(function(i){
                        var _this = $(this);
                        var name = _this.find('name').text();
                        var folder = _this.find('folder').text();
                        if(i == projectLength){
                            if(projectLength == 0){
                                treeMenu += '<li class="collapsable last" data-id="'+ folder +'">';
                            } else {
                                treeMenu += '<li class="expandable last" data-id="'+ folder +'">';
                            }
                        } else {
                            treeMenu += '<li class="expandable" data-id="'+ folder +'">';
                        }
                        treeMenu += '<span class="hitarea"></span>';
                        treeMenu += '<a href="#none" class="vFrame">';
                        treeMenu += name;
                        treeMenu += '</a>';
                        treeMenu += '<ul>';
                        var itemLength = _this.find('menu > *').length - 1;
                        _this.find('menu > *').each(function(j){
                            var tagName = $(this).get(0).tagName;
                            switch(tagName){
                                case "information":
                                    subject = '기본 정보';
                                break;
                                case "ia":
                                    subject = 'IA';
                                break;
                                case "include":
                                    subject = 'HTML 인클루드 구조';
                                break;
                                case "structure":
                                    subject = '파일 및 디렉토리 구조';
                                break;
                                case "layout":
                                    subject = '레이아웃';
                                break;
                                case "layoutSub":
                                    subject = '레이아웃(서브)';
                                break;
                                case "common":
                                    subject = '공통UI';
                                break;
                                case "function":
                                    subject = '기능별 UI';
                                break;
                                case "manage":
                                    subject = '운영/관리 정보';
                                break;
                                default :
                                    subject = tagName;
                            }
                            var url = root + '/' + folderType + '/' + folder + '/' + $(this).text();
                            if(j == itemLength){
                                treeMenu += '<li class="'+ tagName + ' last">';
                            } else {
                                treeMenu += '<li class="'+ tagName + '">';
                            }
                            treeMenu += '<a href="'+ url +'" class="vFrame">';
                            treeMenu += subject;
                            treeMenu += '</a>';
                            treeMenu += '<a href="'+ url +'" class="vTab" target="_blank">[새창]</a>';
                            treeMenu += '</li>';
                        });
                        treeMenu += '</ul>';
                        treeMenu += '</li>';
                    });
                    $('#guideTree').html(treeMenu);
                    // call lnb
                    $.fn.lnb();
                    // iframe src
                    project.frameSrc();
                    // project
                    if(!projectName){
                        $('#guideTree > li:first-child > a').click();
                        $('#guideTree > li:first-child > ul > li:first-child > a').click();
                    }
                    if(projectName != '' ){
                        var flag = 0;
                        $('#guideTree > li').each(function(i){
                            if($(this).attr('data-id') == projectName){
                                flag ++;
                                $(this).find('> a').addClass('selected');
                                $(this).prop('class', 'collapsable last').siblings().remove();
                                $(this).find('> ul > li.information > a').click();
                            } 
                        });
                        if(flag == 0){
                            $('#guideTree').remove();
                            $('#guideFrame').remove();
                            $('#guideContent').append('<p class="guideProjectEmpty">일치하는 프로젝트가 없습니다.</p>');
                        }
                    }
                }
            });
        },
        frameSrc : function(){
            $('#guideTree ul a').click(function(e){
                $('#guideFrame').attr('src', $(this).attr('href'));
            });
        }
    }
    project.init();
}

// lnb tree
$.fn.lnb = function(){
    var area = $('#guideTree');
    area.find('.hitarea').click(function(){
        $(this).siblings('a.vFrame').trigger('click');
    });
    area.find('a.vFrame').click(function(e){
        var li = $(this).parent();
        $(this).addClass('selected');
        li.siblings().find('a.vFrame').removeClass('selected');
        if(li.hasClass('collapsable')){
            li.addClass('expandable');
            li.removeClass('collapsable');
        } else if(li.hasClass('expandable')) {
            li.addClass('collapsable');
            li.removeClass('expandable');
            li.siblings().removeClass('collapsable').addClass('expandable');
        }
        e.preventDefault();
    });
    $('.allCollapse').click(function(e){
        area.find('li.collapsable').removeClass('collapsable').addClass('expandable');
        e.preventDefault();
    });
    $('.allExpand').click(function(e){
        area.find('li.expandable').removeClass('expandable').addClass('collapsable');
        e.preventDefault();
    });
}

// get iframe height
function guideFrameResize(height){
    $('#guideFrame').css({'height':height});
}

$(function(){
    // snb
    $(".guideFoldBar button").click(function(){
        if($('#guideWrap').hasClass('eHidden')){
            $("#guideWrap").removeClass('eHidden');
            $(this).text('메뉴 숨김');
        } else {
            $("#guideWrap").addClass('eHidden');
            $(this).text('메뉴 펼침');
        }
    });
    // search project
    $('#guideFindProject input').keypress(function(){
        $.fn.searchProject($(this).val());
    });
    $('#guideFindProject input').blur(function(){
        $.fn.searchProject($(this).val());
    });

});
