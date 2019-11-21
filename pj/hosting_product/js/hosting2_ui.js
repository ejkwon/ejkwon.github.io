function viewItem(id) {
	var gon = document.getElementById(id);
	gon.style.display = '';
}

function hideItem(id) {
	var gon = document.getElementById(id);
	gon.style.display = 'none';
}

function clOn(id) {
	var gon = document.getElementById(id);
	gon.className = gon.className.replace('_off','_on');
}
function clOff(id) {
	var gon = document.getElementById(id);
	gon.className = gon.className.replace('_on','_off');
}

function clOn2(gon) {
	gon.className = gon.className.replace('_off','_on');
	gon.className = gon.className.replace('_w','_on');
}
function clOff2(gon) {
	gon.className = gon.className.replace('_on','_off');
}

function clCh(id,clName) {
	var gon = document.getElementById(id);
	gon.className = clName;
}

function imgOver(gon) {
	gon.src = gon.src.replace('_off','_on');
}
function imgOut(gon) {
	gon.src = gon.src.replace('_on','_off');
}


function menuA(id,total,num) {
	var id = id;
	var total = total;
	var menu = new Array();
	for(j=0; j <= eval(total); j++) {
		menu[j] = document.getElementById(id + eval(j+1));
	}
	for(var i=0 ; i<= eval(total); i++) {
		if (i == num) {
			menu[i].className = 'on';
		}
		else {
			menu[i].className = 'off';
		}
	}
}

function menuB(id,cont,total,num) {
	var id = id;
	var cont = cont;
	var total = total;
	var menu = new Array();
	var content = new Array();
	for(j=0; j <= eval(total); j++) {
		menu[j] = document.getElementById(id + eval(j+1));
		content[j] = document.getElementById(cont + eval(j+1));
	}
	for(var i=0 ; i<= eval(total); i++) {
		if (i == num) {
			menu[i].className = menu[i].className.replace('off','on');
			content[i].style.display = '';
		}
		else {
			menu[i].className = menu[i].className.replace('on','off');
			content[i].style.display = 'none';
		}
	}
}

function menuC(id,total,num) {
	var id = id;
	var total = total;
	var menu = new Array();
	var content = new Array();
	for(j=0; j <= eval(total); j++) {
		menu[j] = document.getElementById(id + eval(j+1));
	}
	for(var i=0 ; i<= eval(total); i++) {
		if (i == num) {
			menu[i].className = menu[i].className.replace('off','on');
		}
		else {
			menu[i].className = menu[i].className.replace('on','off');
		}
	}
}

function menuD(id,total,num) {
	var id = id;
	var total = total;
	var menu = new Array();
	var content = new Array();
	for(j=0; j <= eval(total); j++) {
		menu[j] = document.getElementById(id + eval(j+1));
	}
	for(var i=0 ; i<= eval(total); i++) {
		if (i == num) {
			menu[i].style.display = '';
		}
		else {
			menu[i].style.display = 'none';
		}
	}
}

function menuE(id,cont,total,num) {
	var id = id;
	var cont = cont;
	var total = total;
	var menu = new Array();
	var content = new Array();
	for(j=0; j <= eval(total); j++) {
		menu[j] = document.getElementById(id + eval(j+1));
		content[j] = document.getElementById(cont + eval(j+1));
	}
	for(var i=0 ; i<= eval(total); i++) {
		if (i == num) {
			menu[i].className = menu[i].className.replace('off','on');
			content[i].style.display = '';
		}
		else {
			menu[i].className = menu[i].className.replace('on','off');
			content[i].style.display = 'none';
		}
	}
}

function menuF(id,total,num) {
	var id = id;
	var total = total;
	var menu = new Array();
	var content = new Array();
	for(j=0; j <= eval(total); j++) {
		menu[j] = document.getElementById(id + eval(j+1));
	}
	for(var i=0 ; i<= eval(total); i++) {
		if (i == num) {
			menu[i].src = menu[i].src.replace('_off','_on');
		}
		else {
			menu[i].src = menu[i].src.replace('_on','_off');
		}
	}
}


/* ���̾� ���콺 �巡�� �̵� */
function layerMove(id) {
	var gon = document.getElementById(id);
	if  (document.getElementById){
		(function(){
			var n = 2;
			var dragok = false;
			var y,x,d,dy,dx;
			function move(e){
				if (!e) e = window.event;
				if (dragok){
					d.style.left = dx + e.clientX - x + "px";
					d.style.top  = dy + e.clientY - y + "px";
					return false;
				}
			}
			function down(e){
				if (!e) e = window.event;
				var temp = (typeof e.target != "undefined")?e.target:e.srcElement;
				if (temp.tagName != "HTML"|"BODY" && temp.className != "drag_area"){
					temp = (typeof temp.parentNode != "undefined")?temp.parentNode:temp.parentElement;
				}
				if (temp.className == "drag_area"){
					dragok = true;
					gon.style.zIndex = n++;
					d = gon;
					dx = parseInt(gon.style.left+0);
					dy = parseInt(gon.style.top+0);
					x = e.clientX;
					y = e.clientY;
					document.onmousemove = move;
				return false;
				}
			}
			function up(){
				dragok = false;
				document.onmousemove = null;
			}
			document.onmousedown = down;
			document.onmouseup = up;
		})();
	}
}
/* //���̾� ���콺 �巡�� �̵� */


/* ���� �����̵� �޴� */
var gon = 1;
var wait_flag=true;
var count = 0;
var speed = 3000;
var total = 7;
function Gview(num)
{
	var sbtn = new Array();
	var item = new Array();
	for(j=0; j <= total; j++) {
		sbtn[j] = document.getElementById('hosts_t_' + eval(j+1));
		item[j] = document.getElementById('hosts_c_' + eval(j+1));
	}
	for(var i=0 ; i <= total; i++) {
		if (i == num) { sbtn[i].className = sbtn[i].className.replace('off','on'); item[i].style.display = ''; }
		else { sbtn[i].className = sbtn[i].className.replace('on','off'); item[i].style.display = 'none'; }
	}
}
function slideGo() {
	if (gon && wait_flag)	{
		Gview(count);
		if(count < 7) count++;
		else count = 0;
	}
	setTimeout ("slideGo()", speed);
}

/* �� */
function eTabAddClass(element, value){
    var newClassName = element.className;
        newClassName += ' ';
        newClassName += value;
    element.className = newClassName;
}
function eTabRemoveClass(element, value){
    var elemClass = element.className;
    var classArr = elemClass.replace(value, '');
    element.className = classArr;
}
function eTabSwap(tab, swapArea){
    var anchorArea = document.getElementById(tab);
    var li = anchorArea.getElementsByTagName('li');
    for(var i=0; i<li.length; i++){
        li[i].onclick = function(e){
            var a = this.childNodes[0];
            var href = a.hash.replace('#', '');
            var target = document.getElementById(href);
            var swap = document.getElementById(swapArea).childNodes;
            var aParent = a.parentNode; 
            var li = a.parentNode.parentNode.childNodes;
            // LI selected
            for(var j=0; j<li.length; j++){
                if(li[j].tagName == 'LI'){
                    // Call function : remove class
                    eTabRemoveClass(li[j], 'selected');
                }
            }
            // Call function : add class
            eTabAddClass(aParent, 'selected');
            // TAB content swap
            for(var j=0; j<swap.length; j++){
                if(swap[j].tagName == 'DIV'){
                    swap[j].style.display = 'none';
                }
            }
            target.style.display = 'block';
            return false
        }
    }
}