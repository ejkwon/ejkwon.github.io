<?php
    /*
     * 모듈보기 레이아웃
    **/

    session_start();
?>
<?php

    // 기본페이지 설정(main)
    if(!isset($_GET['MODULE'])){
        $_GET['MODULE'] = 'main';
    }

    // 파라메터 모듈삽입
    $module = $_GET['MODULE'];

    // 모듈 리스트(id, file, maker, wiki)
    include('../include/module.php');

    // 파라메터에 해당하는 모듈리스트와 컨텐츠 영역을 불러옴
    switch($module){
        // 메인
        case "main":
            $content = '../module/main.php';
        break;
        // 이미지 리스트
        case "imageList":
            $content = '../include/image_list.php';
        break;
        // 일반 모듈
        default:
            include('../module/'.$module.'.php');
            $content = '../include/template.php';
    }
    // maker, wiki, debug, ec
    $maker = '';
    $wiki = '';
    $debug ='';
    $ec = '';

    // 메뉴리스트
    $lnb_menu = '';
    for($flag=0; $flag<count($lnb); $flag++) {
        $file_name = explode('/', $lnb[$flag]['file']);
        $now_file = array_pop($file_name);
        $ready = '';
        $ready_msg = '';
        // 모듈 처리여부
        if(!$lnb[$flag]['file']){
            $ready = 'ready';
            $ready_msg = '준비중 : ';
        }
        $selected = '';
        // debug
        if($lnb[$flag]['debug'] == ''){
            $debug ='';
        } else {
            $debug = '<a href="../debug_css.html#'.$lnb[$flag]["debug"].'" class="debug" target="_blank" title="새창열림">[D]</a>';
        }
        //ec
        if($lnb[$flag]['ec'] == ''){
            $ec ='';
        } else {
            $ec = '<span class="icoEC">EC</span>';
        }
        // 현재 선택된 페이지
        if($now_file == $module){
            $selected = 'selected';
            $maker = $lnb[$flag]['maker'];
            // wki
            if($lnb[$flag]['wiki'] == '' ){
                $wiki = '<strong>준비중</strong>';
            } else {
                $wiki = '<a href="'.$lnb[$flag]["wiki"].'" target="_blank" title="새창열기">상세내역 보기</a>';
            }
        }
        // lnb
        if($lnb[$flag]['ec'] == 'ec'){
            $lnb_menu = $lnb_menu . '<li class="'. $ready . $selected .'">'. $debug .'<a href="../include/layout.php?MODULE='. $lnb[$flag]['file'] .'">'. $ready_msg . $lnb[$flag]['module'] .'<span class="icoEC">EC</span></a></li>';
        } else if($lnb[$flag]['ec'] == 'new'){
            $lnb_menu = $lnb_menu . '<li class="'. $ready . $selected .'">'. $debug .'<a href="../include/layout.php?MODULE='. $lnb[$flag]['file'] .'">'. $ready_msg . $lnb[$flag]['module'] .' <span class="icoNew">new</span></a></li>';
        } else {
            $lnb_menu = $lnb_menu . '<li class="'. $ready . $selected .'">'. $debug .'<a href="../include/layout.php?MODULE='. $lnb[$flag]['file'] .'">'. $ready_msg . $lnb[$flag]['module'] .'</a></li>';
        }
    }

    // xml
    $xml = 'class=""';
    if(isset($_GET['XML'])){
        $xml = 'class="xml"';
    }
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8" />
    <title>cafe24 SUIO ::</title>
    <link rel="stylesheet" type="text/css" href="../css/suio.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../css/common.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../css/library.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../css/theme/default.css" media="all" id="codeTheme" />
    <link rel="stylesheet" type="text/css" href="../css/debug.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../css/debug_test.css" media="all" />
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <script type="text/javascript" src="../js/suio.js"></script>
    <script type="text/javascript" src="../js/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="../js/prettify.js"></script>
    <script type="text/javascript" src="../js/lang-css.js"></script>
    <script type="text/javascript" src="../js/fakescroll.js"></script>
    <script type="text/javascript" src="../js/ui.js"></script>
    <script type="text/javascript" src="../js/ZeroClipboard.js"> </script>
    <script type="text/javascript" src="../js/ec.js"></script>
    <script type="text/javascript" src="../js/suio_slider.js"></script>
</head>
<body <?=$xml?>>
    <div id="uioWrap">
        <header id="uioHeader">
            <h1><a href="/pj/suio/">SUIO</a></h1>
            <nav class="uioNavigation">
                <a href="../module_search.html" target="_blank">모듈명 뽑기</a>
                <a href="../support_converter.html" target="_blank">Support Converter</a>
                <a href="../code_replace.html" target="_blank">꺽쇠변환</a>
                <a href="../xml_create.php" target="_blank">suio.xml 생성</a>
                <a href="../include/layout.php?MODULE=imageList">공통 이미지</a>
                <select id="uioLanguage" class="fSelect" style="width:80px;">
                    <option>简体中文</option>
                    <option>ENGLISH</option>
                </select>
            </nav>
        </header>
        <hr class="layout" />
        <div id="uioContainer">
            <aside id="uioSidebar">
                <div id="uioSearch"><input type="text" name="uioSearchKey" placeholder="모듈명을 넣어주세요" /></div>
                <ul id="uioSnb">
                    <?= $lnb_menu ?>
                </ul>
                <div id="uioNull"></div>
                <a href="#uioWrap" class="toggle" title="메뉴 토글">‹</a>
                <a href="#uioWrap" class="focus" >↑</a>
            </aside>
            <hr class="layout" />
            <div id="content">
                <?php include($content); ?>
            </div>
        </div>
    </div>

    <?php if($_GET['MODULE'] == 'javascript'){ ?>
        <div id="jsSampleLayer" class="mLayer gSmall">
            <h2>대제목 : h2 (340px)</h2>
            <div class="wrap">
                <div class="mTitle">
                    <h3>중제목 : h3</h3>
                    <p>문단형 설명문구</p>
                    <ul>
                        <li>목록형 설명문구</li>
                        <li>목록형 설명문구</li>
                    </ul>
                </div>
                <div class="mTitle">
                    <h4>[ 소제목 : h4 ]</h4>
                    <p>문단형 설명문구</p>
                    <ul>
                        <li>목록형 설명문구</li>
                        <li>목록형 설명문구</li>
                    </ul>
                </div>
                <div class="">
                    컨텐츠를 넣어주세요.
                </div>
            </div>
            <div class="footer">
                <a href="#none" class="btnCtrl"><span>저장</span></a>
                <a href="#none" class="btnNormal eClose"><span>닫기</span></a>
            </div>
            <button type="button" class="btnClose eClose">닫기</button>
        </div>

        <div id="jsSampleLayerOver" class="mLayer gSmall">
            <h2>대제목 : h2 (340px)</h2>
            <div class="wrap">
                <div class="mTitle">
                    <h3>중제목 : h3</h3>
                    <p>문단형 설명문구</p>
                    <ul>
                        <li>목록형 설명문구</li>
                        <li>목록형 설명문구</li>
                    </ul>
                </div>
                <div class="mTitle">
                    <h4>[ 소제목 : h4 ]</h4>
                    <p>문단형 설명문구</p>
                    <ul>
                        <li>목록형 설명문구</li>
                        <li>목록형 설명문구</li>
                    </ul>
                </div>
                <div class="">
                    컨텐츠를 넣어주세요.
                </div>
            </div>
            <div class="footer">
                <a href="#none" class="btnCtrl"><span>저장</span></a>
                <a href="#none" class="btnNormal eClose"><span>닫기</span></a>
            </div>
            <button type="button" class="btnClose eClose">닫기</button>
        </div>
    <?php } ?>

    <?php if($_GET['MODULE'] == 'javascript'){ ?>
        <div id="jsSampleLoading" class="mLoading">
            <p>처리중입니다. 잠시만 기다려 주세요.</p>
            <img src="//img.echosting.cafe24.com/suio/ico_loading.gif" alt="" />
        </div>
    <?php } ?>

    <?php if($_GET['MODULE'] == 'board_row_write'){ ?>
        <script>
        $(document).ready(function(){
            $.get(window.location.origin+"../module/board_nation.html", function(data, status){
                $("#board_nation").html(data);
            });
        });
        </script>
    <?php } ?>

    <?php if($_GET['MODULE'] == 'board_row_write' || $_GET['MODULE'] == 'zipcode' ){ ?>
        <div id="ordZipcode1" class="mLayer gMedium">
            <h2>우편번호 검색</h2>
            <div class="wrap">
                <div class="mZipcode">
                    <p class="mList typeMore">동(읍/면/리/건물명)을 입력해 주세요.</p>
                    <div class="mBoard gSmall">
                        <table border="1" summary="">
                        <caption>지번주소 검색</caption>
                        <tbody>
                            <tr>
                                <th scope="row">검색어</th>
                                <td>
                                    <input type="text" placeholder="예시) 신대방동" class="fText" style="width:200px;" />
                                    <a href="#none" class="btnSearch"><span>검색</span></a>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <p class="txtZip">검색결과에서 해당되는 주소를 빠르게 두번 클릭하시거나 선택을 클릭해주세요.</p>
                    <div class="zipList">
                        <table border="1" summary="">
                        <caption>지번주소 검색결과</caption>
                        <colgroup>
                            <col style="width:auto;" />
                            <col style="width:60px;" />
                            <col style="width:60px;" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">상세주소</th>
                                <th scope="col">우편번호</th>
                                <th scope="col">선택</th>
                            </tr>
                        </thead>
                        <tbody class="center">
                            <tr>
                                <td class="left">
                                    <ul class="address">
                                        <li><span class="icoNumber">지번</span><p>서울 동작구 신대방2동</p></li>
                                    </ul>
                                </td>
                                <td>156-012</td>
                                <td><a href="#none" class="btnNormal"><span>선택</span></a></td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <ul class="address">
                                        <li><span class="icoNumber">지번</span><p>서울 동작구 신대방2동</p></li>
                                    </ul>
                                </td>
                                <td>156-012</td>
                                <td><a href="#none" class="btnNormal"><span>선택</span></a></td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <ul class="address">
                                        <li><span class="icoNumber">지번</span><p>서울 동작구 신대방2동</p></li>
                                    </ul>
                                </td>
                                <td>156-012</td>
                                <td><a href="#none" class="btnNormal"><span>선택</span></a></td>
                            </tr>
                        </tbody>
                        <tbody class="empty">
                            <tr><td colspan="3">검색 내역이 없습니다.</td></tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <button type="button" class="btnClose eClose">닫기</button>
        </div>

        <!-- 참고 : 일본몰 레이어(어드민용은 한국어)
        <div id="ordZipcodeKR class="mLayer gMedium">
            <h2>우편번호 찾기</h2>
            <div class="wrap">
                <div class="mTab typeTab gMore eTab">
                    <ul>
                        <li class="selected"><a href="#tabJapanLayerAddress1">우편번호 검색</a></li>
                        <li><a href="#tabJapanLayerAddress2">주소 검색</a></li>
                    </ul>
                </div>
                <div class="mZipcode" id="tabJapanLayerAddress1">
                    <div class="mBox typeBg">
                        <input type="text" class="fText" style="width:250px;" value="" placeholder="우편번호를 입력하세요" />
                        <a href="#none" class="btnCtrl"><span>검색</span></a>
                    </div>
                    <div class="zipList gDouble">
                        <table border="1" summary="">
                        <caption>우편번호 검색</caption>
                        <colgroup>
                            <col style="width:80px;" />
                            <col style="width:auto;" />
                            <col style="width:80px;" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">Zip Code</th>
                                <th scope="col">Address</th>
                                <th scope="col">Select</th>
                            </tr>
                        </thead>
                        <tbody class="center">
                            <tr>
                                <td>105-0003</td>
                                <td class="left"><a href="#none">東京都 港区 西新橋</a></td>
                                <td><a href="#none" class="btnNormal"><span>Select</span></a></td>
                            </tr>
                        </tbody>
                        <tbody class="empty">
                            <tr><td colspan="3">검색 결과가 없습니다.</td></tr>
                        </tbody>
                        </table>
                    </div>
                </div>
                <div class="mZipcode" id="tabJapanLayerAddress2" style="display:none;">
                    <div class="mBox typeBg">
                        都道府県を(주/도)
                        <select class="fSelect">
                            <option> select</option>
                            <option> 大分県</option>
                        </select>
                        市区町村を(시/군/도시)
                        <select class="fSelect">
                            <option> select</option>
                            <option> 大分市</option>
                        </select>
                    </div>
                    <div class="zipList gDouble">
                        <table border="1" summary="">
                        <caption>주소 검색</caption>
                        <colgroup>
                            <col style="width:80px;" />
                            <col style="width:auto;" />
                            <col style="width:80px;" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">Zip Code</th>
                                <th scope="col">Address</th>
                                <th scope="col">Select</th>
                            </tr>
                        </thead>
                        <tbody class="center">
                            <tr>
                                <td>870-0154</td>
                                <td class="left">大分県 大分市 西春日町</td>
                                <td><a href="#none" class="btnNormal"><span>Select</span></a></td>
                            </tr>
                        </tbody>
                        <tbody class="empty">
                            <tr><td colspan="3">검색 결과가 없습니다.</td></tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <button type="button" class="btnClose eClose">닫기</button>
        </div> //참고 -->

        <!-- 참고 : 일본몰 레이어 (프론트는 일본어) -->
        <div id="ordZipcode2" class="mLayer gMedium">
            <h2>検索</h2>
            <div class="wrap">
                <div class="mTab typeTab gMore eTab">
                    <ul>
                        <li class="selected"><a href="#tabJapanLayerAddress1">郵便番号で検索</a></li>
                        <li><a href="#tabJapanLayerAddress2">住所で検索</a></li>
                    </ul>
                </div>
                <div class="mZipcode" id="tabJapanLayerAddress1">
                    <div class="mBox typeBg">
                        <input type="text" class="fText" style="width:250px;" value="" placeholder="例）111-1111" />
                        <a href="#none" class="btnCtrl"><span>検索</span></a>
                    </div>
                    <div class="zipList gDouble">
                        <table border="1" summary="">
                        <caption>郵便番号で検索</caption>
                        <colgroup>
                            <col style="width:80px;" />
                            <col style="width:auto;" />
                            <col style="width:80px;" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">Zip Code</th>
                                <th scope="col">Address</th>
                                <th scope="col">Select</th>
                            </tr>
                        </thead>
                        <tbody class="center">
                            <tr>
                                <td>105-0003</td>
                                <td class="left">東京都 港区 西新橋</td>
                                <td><a href="#none" class="btnNormal"><span>Select</span></a></td>
                            </tr>
                        </tbody>
                        <tbody class="empty">
                            <tr><td colspan="3">選択する住所をクリックしてください。</td></tr>
                        </tbody>
                        </table>
                    </div>
                </div>
                <div class="mZipcode" id="tabJapanLayerAddress2" style="display:none;">
                    <div class="mBox typeBg">
                        都道府県を
                        <select class="fSelect">
                            <option> 選択してください。</option>
                            <option> 大分県</option>
                        </select>
                        市区町村を
                        <select class="fSelect">
                            <option> 選択してください。</option>
                            <option> 大分市</option>
                        </select>
                    </div>
                    <div class="zipList gDouble">
                        <table border="1" summary="">
                        <caption>住所で検索</caption>
                        <colgroup>
                            <col style="width:80px;" />
                            <col style="width:auto;" />
                            <col style="width:80px;" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">Zip Code</th>
                                <th scope="col">Address</th>
                                <th scope="col">Select</th>
                            </tr>
                        </thead>
                        <tbody class="center">
                            <tr>
                                <td>870-0154</td>
                                <td class="left">大分県 大分市 西春日町</td>
                                <td><a href="#none" class="btnNormal"><span>Select</span></a></td>
                            </tr>
                        </tbody>
                        <tbody class="empty">
                            <tr><td colspan="3">該当する結果がありません。</td></tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <button type="button" class="btnClose eClose">閉じる</button>
        </div><!-- //참고 -->

        <div id="ordZipcode3" class="mLayer gMedium">
            <h2>搜索地址</h2>
            <div class="wrap">
                <div class="mZipcode">
                    <fieldset>
                        <legend>搜索地址</legend>
                        <select class="fSelect">
                            <option selected="selected">选择</option>
                            <option>中国</option>
                            <option>香港</option>
                            <option>澳门</option>
                            <option>台湾</option>
                        </select>
                        <select class="fSelect">
                            <option selected="selected">选择</option>
                            <option>北京</option>
                            <option>天津</option>
                            <option>上海</option>
                            <option>重庆</option>
                            <option>黑龙江</option>
                            <option>吉林</option>
                            <option>辽宁</option>
                            <option>河北</option>
                            <option>山西</option>
                            <option>陕西</option>
                            <option>甘肃</option>
                            <option>青海</option>
                            <option>四川</option>
                            <option>贵州</option>
                            <option>云南</option>
                            <option>广东</option>
                            <option>湖南</option>
                            <option>湖北</option>
                            <option>江西</option>
                            <option>江苏</option>
                            <option>浙江</option>
                            <option>山东</option>
                            <option>河南</option>
                            <option>安徽</option>
                            <option>福建</option>
                            <option>海南</option>
                            <option>台湾 </option>
                            <option>香港</option>
                            <option>澳门</option>
                            <option>内蒙古</option>
                            <option>新疆</option>
                            <option>广西</option>
                            <option>宁夏</option>
                            <option>西藏</option>
                            <option>海外</option>
                            <option>以外</option>
                        </select> 省/市
                        <select class="fSelect">
                            <option selected="selected"> 选择</option>
                            <option>北京</option>
                            <option>台北</option>
                            <option>香港</option>
                            <option>澳门</option>
                            <option>.</option>
                            <option>.</option>
                            <option>.</option>
                        </select> 市/县
                        <select class="fSelect">
                            <option selected="selected"> 选择</option>
                            <option>西城</option>
                            <option>中正区</option>
                            <option>香港</option>
                            <option>澳门</option>
                            <option>.</option>
                            <option>.</option>
                            <option>.</option>
                        </select> 区
                    </fieldset>
                </div>
                <p class="mList typeMore gDouble">不需要重复填写省/市/区</p>
                <div class="gDouble">
                    <input type="text" class="fText" style="width:250px;" /> 邮编编码
                </div>
                <p class="mList typeMore gDouble">大陆以外地区不用填写</p>
            </div>
            <div class="footer">
                <a href="#none" class="btnCtrl"><span>使用</span></a>
                <a href="#none" class="btnNormal eClose"><span>取消</span></a>
            </div>
            <button type="button" class="btnClose eClose">取消</button>
        </div>

        <div id="ordZipcode4" class="mLayer gLarge">
            <h2>우편번호 검색</h2>
            <div class="wrap">
                <div class="mTab typeNav gExtend eTab">
                    <ul>
                        <li class="selected"><a href="#tabNumber">지번주소(구)</a></li>
                        <li><a href="#tabStreet1">도로명주소(신)</a>
                            <ul>
                                <li class="selected"><a href="#tabStreet1">동(읍/면) + 지번</a></li>
                                <li><a href="#tabStreet2">도로명 + 건물번호</a></li>
                                <li><a href="#tabStreet3">건물명(아파트)</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div id="tabNumber" class="tabCont" style="display:block;">
                    <div class="mZipcode">
                        <p class="mList typeMore">동(읍/면/리/건물명)을 입력해 주세요.</p>
                        <div class="mBoard gMedium">
                            <table border="1" summary="">
                            <caption>지번주소 검색</caption>
                            <tbody>
                                <tr>
                                    <th scope="row">주소 검색</th>
                                    <td>
                                        <input type="text" placeholder="예시) 신대방동" class="fText" style="width:200px;" />
                                        <a href="#none" class="btnSearch"><span>검색</span></a>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <p class="txtZip">검색결과에서 해당되는 주소를 빠르게 두번 클릭하시거나 선택을 클릭해주세요.</p>
                        <div class="zipList">
                            <table border="1" summary="">
                            <caption>지번주소 검색결과</caption>
                            <colgroup>
                                <col style="width:auto;" />
                                <col style="width:60px;" />
                                <col style="width:60px;" />
                            </colgroup>
                            <thead>
                                <tr>
                                    <th scope="col">상세주소</th>
                                    <th scope="col">우편번호</th>
                                    <th scope="col">선택</th>
                                </tr>
                            </thead>
                            <tbody class="center">
                                <tr>
                                    <td class="left">
                                        <ul class="address">
                                            <li><span class="icoNumber">지번</span><p>서울 동작구 신대방2동</p></li>
                                        </ul>
                                    </td>
                                    <td>156-012</td>
                                    <td><a href="#none" class="btnNormal"><span>선택</span></a></td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <ul class="address">
                                            <li><span class="icoNumber">지번</span><p>서울 동작구 신대방2동</p></li>
                                        </ul>
                                    </td>
                                    <td>156-012</td>
                                    <td><a href="#none" class="btnNormal"><span>선택</span></a></td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <ul class="address">
                                            <li><span class="icoNumber">지번</span><p>서울 동작구 신대방2동</p></li>
                                        </ul>
                                    </td>
                                    <td>156-012</td>
                                    <td><a href="#none" class="btnNormal"><span>선택</span></a></td>
                                </tr>
                            </tbody>
                            <tbody class="empty">
                                <tr><td colspan="3">검색 내역이 없습니다.</td></tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="tabStreet1" class="tabCont" style="display:none;">
                    <div class="mZipcode">
                        <ul class="mList typeMore">
                            <li>검색방법 : '서울시 중구 충무로1가 21-1'의 경우, 지역 선택 후 '충무로(동명), 21-1(지번)'을 입력.</li>
                            <li>도로명 주소가 검색되지 않는 경우는 행정안전부 새주소 안내시스템<br /><a href="http://www.juso.go.kr" target="_blank" title="새창 열림">http://www.juso.go.kr</a>에서 확인해 주세요.</li>
                        </ul>
                        <div class="mBoard gMedium">
                            <table border="1" summary="">
                            <caption>동(읍/면) + 지번 검색</caption>
                            <tbody>
                                <tr>
                                    <th scope="row">지역 <strong class="icoRequired">필수</strong></th>
                                    <td>
                                        <select class="fSelect" style="width:130px;">
                                            <option>- 시/도 전체 -</option>
                                            <option>$시도</option>
                                        </select>
                                        <select class="fSelect" style="width:130px;">
                                            <option>- 시/군/구 전체 -</option>
                                            <option>$시군구</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">동(읍/면) <strong class="icoRequired">필수</strong></th>
                                    <td>
                                        <input type="text" placeholder="예시) 신대방동" class="fText" style="width:250px;" />
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">지번</th>
                                    <td>
                                        <input type="text" placeholder="예시) 359" class="fText" style="width:250px;" />
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <div class="mButton gCenter">
                            <a href="#none" class="btnSearch"><span>검색</span></a>
                        </div>
                        <ul class="mList typeMore">
                            <li><span class="txtEm">검색결과에서 해당되는 주소를 빠르게 두번 클릭하시거나 선택을 클릭해주세요.</span></li>
                            <li><span class="txtEm">등록할 주소를 선택하시면 '지번'주소가 주소란에 등록됩니다.</span></li>
                        </ul>
                        <div class="zipList street">
                            <table border="1" summary="">
                            <caption>동(읍/면) + 지번 검색결과</caption>
                            <colgroup>
                                <col style="width:auto;" />
                                <col style="width:60px;" />
                                <col style="width:60px;" />
                            </colgroup>
                            <thead>
                                <tr>
                                    <th scope="col">상세주소</th>
                                    <th scope="col">우편번호</th>
                                    <th scope="col">선택</th>
                                </tr>
                            </thead>
                            <tbody class="center">
                                <tr>
                                    <td class="left">
                                        <ul class="address">
                                            <li><span class="icoStreet">도로명</span><p>서울 동작구 신대방로</p></li>
                                            <li><span class="icoNumber">지번</span><p>서울 동작구 신대방2동</p></li>
                                        </ul>
                                    </td>
                                    <td>156-012</td>
                                    <td><a href="#none" class="btnNormal"><span>선택</span></a></td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <ul class="address">
                                            <li><span class="icoStreet">도로명</span><p>서울 동작구 신대방로 서울 동작구 신대방로 서울 동작구 신대방로 서울 동작구 신대방로 서울 동작구 신대방로</p></li>
                                            <li><span class="icoNumber">지번</span><p>서울 동작구 신대방2동 서울 동작구 신대방2동 서울 동작구 신대방2동 서울 동작구 신대방2동 서울 동작구 신대방2동</p></li>
                                        </ul>
                                    </td>
                                    <td>156-012</td>
                                    <td><a href="#none" class="btnNormal"><span>선택</span></a></td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <ul class="address">
                                            <li><span class="icoStreet">도로명</span><p>서울 동작구 신대방로</p></li>
                                            <li><span class="icoNumber">지번</span><p>서울 동작구 신대방2동</p></li>
                                        </ul>
                                    </td>
                                    <td>156-012</td>
                                    <td><a href="#none" class="btnNormal"><span>선택</span></a></td>
                                </tr>
                            </tbody>
                            <tbody class="empty">
                                <tr><td colspan="3">검색 내역이 없습니다.</td></tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="tabStreet2" class="tabCont" style="display:none;">
                    <div class="mZipcode">
                        <ul class="mList typeMore">
                            <li>검색방법 : '서울시 중구 소공로 70' 의 경우, 지역 선택 후 '소공로(도로명), 70(건물번호)'을 입력.</li>
                            <li>도로명 주소가 검색되지 않는 경우는 행정안전부 새주소 안내시스템<br /><a href="http://www.juso.go.kr" target="_blank" title="새창 열림">http://www.juso.go.kr</a>에서 확인해 주세요.</li>
                        </ul>
                        <div class="mBoard gMedium">
                            <table border="1" summary="">
                            <caption>도로명 + 건물번호 검색</caption>
                            <tbody>
                                <tr>
                                    <th scope="row">지역 <strong class="icoRequired">필수</strong></th>
                                    <td>
                                        <select class="fSelect" style="width:130px;">
                                            <option>- 시/도 전체 -</option>
                                            <option>$시도</option>
                                        </select>
                                        <select class="fSelect" style="width:130px;">
                                            <option>- 시/군/구 전체 -</option>
                                            <option>$시군구</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">도로명 <strong class="icoRequired">필수</strong></th>
                                    <td>
                                        <input type="text" name="street" placeholder="예시) 보라매로" class="fText" style="width:250px;" />
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">건물번호</th>
                                    <td>
                                        <input type="text" name="street" placeholder="예시) 15" class="fText" style="width:250px;" />
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <div class="mButton gCenter">
                            <a href="#none" class="btnSearch"><span>검색</span></a>
                        </div>
                        <ul class="mList typeMore">
                            <li><span class="txtEm">검색결과에서 해당되는 주소를 빠르게 두번 클릭하시거나 선택을 클릭해주세요.</span></li>
                            <li><span class="txtEm">등록할 주소를 선택하시면 '지번'주소가 주소란에 등록됩니다.</span></li>
                        </ul>
                        <div class="zipList street">
                            <table border="1" summary="">
                            <caption>도로명 + 건물번호 검색결과</caption>
                            <colgroup>
                                <col style="width:auto;" />
                                <col style="width:60px;" />
                                <col style="width:60px;" />
                            </colgroup>
                            <thead>
                                <tr>
                                    <th scope="col">상세주소</th>
                                    <th scope="col">우편번호</th>
                                    <th scope="col">선택</th>
                                </tr>
                            </thead>
                            <tbody class="center">
                                <tr>
                                    <td class="left">
                                        <ul class="address">
                                            <li><span class="icoStreet">도로명</span><p>서울 동작구 신대방로</p></li>
                                            <li><span class="icoNumber">지번</span><p>서울 동작구 신대방2동</p></li>
                                        </ul>
                                    </td>
                                    <td>156-012</td>
                                    <td><a href="#none" class="btnNormal"><span>선택</span></a></td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <ul class="address">
                                            <li><span class="icoStreet">도로명</span><p>서울 동작구 신대방로 서울 동작구 신대방로 서울 동작구 신대방로 서울 동작구 신대방로 서울 동작구 신대방로</p></li>
                                            <li><span class="icoNumber">지번</span><p>서울 동작구 신대방2동 서울 동작구 신대방2동 서울 동작구 신대방2동 서울 동작구 신대방2동 서울 동작구 신대방2동</p></li>
                                        </ul>
                                    </td>
                                    <td>156-012</td>
                                    <td><a href="#none" class="btnNormal"><span>선택</span></a></td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <ul class="address">
                                            <li><span class="icoStreet">도로명</span><p>서울 동작구 신대방로</p></li>
                                            <li><span class="icoNumber">지번</span><p>서울 동작구 신대방2동</p></li>
                                        </ul>
                                    </td>
                                    <td>156-012</td>
                                    <td><a href="#none" class="btnNormal"><span>선택</span></a></td>
                                </tr>
                            </tbody>
                            <tbody class="empty">
                                <tr><td colspan="3">검색 내역이 없습니다.</td></tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="tabStreet3" class="tabCont" style="display:none;">
                    <div class="mZipcode">
                        <ul class="mList typeMore">
                            <li>검색방법 : '서울시 중구 중앙우체국'의 경우, 지역 선택 후 '중앙우체국(건물명)' 입력.</li>
                            <li>도로명 주소가 검색되지 않는 경우는 행정안전부 새주소 안내시스템<br /><a href="http://www.juso.go.kr" target="_blank" title="새창 열림">http://www.juso.go.kr</a>에서 확인해 주세요.</li>
                        </ul>
                        <div class="mBoard gMedium">
                            <table border="1" summary="">
                            <caption>건물명(아파트) 검색</caption>
                            <tbody>
                                <tr>
                                    <th scope="row">지역 <strong class="icoRequired">필수</strong></th>
                                    <td>
                                        <select class="fSelect" style="width:130px;">
                                            <option>- 시/도 전체 -</option>
                                            <option>$시도</option>
                                        </select>
                                        <select class="fSelect" style="width:130px;">
                                            <option>- 시/군/구 전체 -</option>
                                            <option>$시군구</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">건물명 <strong class="icoRequired">필수</strong></th>
                                    <td>
                                        <input type="text" name="street" placeholder="예시) 전문건설회관" class="fText" style="width:252px;" />
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <div class="mButton gCenter">
                            <a href="#none" class="btnSearch"><span>검색</span></a>
                        </div>
                        <ul class="mList typeMore">
                            <li><span class="txtEm">검색결과에서 해당되는 주소를 빠르게 두번 클릭하시거나 선택을 클릭해주세요.</span></li>
                            <li><span class="txtEm">등록할 주소를 선택하시면 '지번'주소가 주소란에 등록됩니다.</span></li>
                        </ul>
                        <div class="zipList building">
                            <table border="1" summary="">
                            <caption>건물명(아파트) 검색결과</caption>
                            <colgroup>
                                <col style="width:auto;" />
                                <col style="width:60px;" />
                                <col style="width:60px;" />
                            </colgroup>
                            <thead>
                                <tr>
                                    <th scope="col">상세주소</th>
                                    <th scope="col">우편번호</th>
                                    <th scope="col">선택</th>
                                </tr>
                            </thead>
                            <tbody class="center">
                                <tr>
                                    <td class="left">
                                        <ul class="address">
                                            <li><span class="icoStreet">도로명</span><p>서울 동작구 신대방로</p></li>
                                            <li><span class="icoNumber">지번</span><p>서울 동작구 신대방2동</p></li>
                                        </ul>
                                    </td>
                                    <td>156-012</td>
                                    <td><a href="#none" class="btnNormal"><span>선택</span></a></td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <ul class="address">
                                            <li><span class="icoStreet">도로명</span><p>서울 동작구 신대방로 서울 동작구 신대방로 서울 동작구 신대방로 서울 동작구 신대방로 서울 동작구 신대방로</p></li>
                                            <li><span class="icoNumber">지번</span><p>서울 동작구 신대방2동 서울 동작구 신대방2동 서울 동작구 신대방2동 서울 동작구 신대방2동 서울 동작구 신대방2동</p></li>
                                        </ul>
                                    </td>
                                    <td>156-012</td>
                                    <td><a href="#none" class="btnNormal"><span>선택</span></a></td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <ul class="address">
                                            <li><span class="icoStreet">도로명</span><p>서울 동작구 신대방로</p></li>
                                            <li><span class="icoNumber">지번</span><p>서울 동작구 신대방2동</p></li>
                                        </ul>
                                    </td>
                                    <td>156-012</td>
                                    <td><a href="#none" class="btnNormal"><span>선택</span></a></td>
                                </tr>
                            </tbody>
                            <tbody class="empty">
                                <tr><td colspan="3">검색 내역이 없습니다.</td></tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btnClose eClose">닫기</button>
        </div>

        <div id="ordZipcode5" class="mLayer gMedium">
            <h2>檢索地址</h2>
            <div class="wrap">
                <div class="mZipcode">
                    <fieldset>
                        <legend>檢索地址</legend>
                        <select class="fSelect">
                            <option>北京</option>
                            <option>天津</option>
                            <option>上海</option>
                        </select> 市/縣
                        <select class="fSelect">
                            <option>北京</option>
                            <option>天津</option>
                            <option>上海</option>
                        </select> 區/市
                    </fieldset>
                    <div class="gDouble">
                        <input type="text" class="fText" style="width:250px;" /> 郵遞區號
                    </div>
                </div>
            </div>
            <div class="footer">
                <a href="#none" class="btnCtrl"><span>使用</span></a>
                <a href="#none" class="btnNormal eClose"><span>取消</span></a>
            </div>
            <button type="button" class="btnClose eClose">取消</button>
        </div>
    <?php } ?>

    <a href="#uioWrap" id="uioAnchorHeader">↑Top</a>
</body>
</html>
