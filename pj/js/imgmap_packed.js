
function imgmap(_1){
	this.version="2.2";
	this.buildDate="2009/08/12 22:18";
	this.buildNumber="113";
	this.config={};
	this.is_drawing=0;
	this.strings=[];
	this.memory=[];
	this.areas=[];
	this.logStore=[];
	this.eventHandlers={};
	this.currentid=0;
	this.draggedId=null;
	this.selectedId=null;
	this.nextShape="rect";
	this.viewmode=0;
	this.loadedScripts=[];
	this.isLoaded=false;
	this.cntReloads=0;
	this.mapname="";
	this.mapid="";
	this.waterMark="";
	this.globalscale=1;
	this.DM_RECTANGLE_DRAW=1;
	this.DM_RECTANGLE_MOVE=11;
	this.DM_RECTANGLE_RESIZE_TOP=12;
	this.DM_RECTANGLE_RESIZE_RIGHT=13;
	this.DM_RECTANGLE_RESIZE_BOTTOM=14;
	this.DM_RECTANGLE_RESIZE_LEFT=15;
	this.DM_SQUARE_DRAW=2;
	this.DM_SQUARE_MOVE=21;
	this.DM_SQUARE_RESIZE_TOP=22;
	this.DM_SQUARE_RESIZE_RIGHT=23;
	this.DM_SQUARE_RESIZE_BOTTOM=24;
	this.DM_SQUARE_RESIZE_LEFT=25;
	this.DM_POLYGON_DRAW=3;
	this.DM_POLYGON_LASTDRAW=30;
	this.DM_POLYGON_MOVE=31;
	this.DM_BEZIER_DRAW=4;
	this.DM_BEZIER_LASTDRAW=40;
	this.DM_BEZIER_MOVE=41;
	this.config.mode="editor";
	this.config.baseroot="";
	this.config.lang="";
	this.config.defaultLang="en";
	this.config.loglevel=0;
	this.config.custom_callbacks={};
	this.event_types=["onModeChanged","onHtmlChanged","onAddArea","onRemoveArea","onDrawArea","onResizeArea","onRelaxArea","onFocusArea","onBlurArea","onMoveArea","onSelectRow","onLoadImage","onSetMap","onGetMap","onSelectArea","onDblClickArea","onStatusMessage","onAreaChanged"];
	this.config.CL_DRAW_BOX="#E32636";
	this.config.CL_DRAW_SHAPE="#d00";
	this.config.CL_DRAW_BG="#fff";
	this.config.CL_NORM_BOX="#E32636";
	this.config.CL_NORM_SHAPE="#d00";
	this.config.CL_NORM_BG="#fff";
	this.config.CL_HIGHLIGHT_BOX="#E32636";
	this.config.CL_HIGHLIGHT_SHAPE="#d00";
	this.config.CL_HIGHLIGHT_BG="#fff";
	this.config.CL_KNOB="#555";
	this.config.bounding_box=true;
	this.config.label="%n";
	this.config.label_class="imgmap_label";
	this.config.label_style="font: bold 16px Arial";
	this.config.hint="#%n %h";
	this.config.draw_opacity="35";
	this.config.norm_opacity="70";
	this.config.highlight_opacity="70";
	this.config.cursor_default="crosshair";
	var ua=navigator.userAgent;
	this.isMSIE=(navigator.appName=="Microsoft Internet Explorer");
	this.isMSIE5=this.isMSIE&&(ua.indexOf("MSIE 5")!=-1);
	this.isMSIE5_0=this.isMSIE&&(ua.indexOf("MSIE 5.0")!=-1);
	this.isMSIE7=this.isMSIE&&(ua.indexOf("MSIE 7")!=-1);
	this.isGecko=ua.indexOf("Gecko")!=-1;
	this.isSafari=ua.indexOf("Safari")!=-1;
	this.isOpera=(typeof window.opera!="undefined");
	this.setup(_1);
}

imgmap.prototype.assignOID=function(_3){
	try{
		if(typeof _3=="undefined"){
			this.log("Undefined object passed to assignOID.");
			return null;
		}else{
			if(typeof _3=="object"){
				return _3;
			}else{
				if(typeof _3=="string"){
					return document.getElementById(_3);
				}
			}
		}
	}
	catch(err){this.log("Error in assignOID",1);}
	return null;
};

imgmap.prototype.setup=function(_4){
	for(var i in _4){
		if(_4.hasOwnProperty(i)){this.config[i]=_4[i];}
	}
	this.addEvent(document,"keydown",this.eventHandlers.doc_keydown=this.doc_keydown.bind(this));
	this.addEvent(document,"keyup",this.eventHandlers.doc_keyup=this.doc_keyup.bind(this));
	this.addEvent(document,"mousedown",this.eventHandlers.doc_mousedown=this.doc_mousedown.bind(this));
	if(_4&&_4.pic_container){
		this.pic_container=this.assignOID(_4.pic_container);
		this.disableSelection(this.pic_container);
	}
	if(!this.config.baseroot){var _6=document.getElementsByTagName("base");var _7="";for(i=0;i<_6.length;i++){if(_6[i].href){_7=_6[i].href;if(_7.charAt(_7.length-1)!="/"){_7+="/";}
break;}}
var _8=document.getElementsByTagName("script");var _9=false;for(i=0;i<_8.length;i++){if(_8[i].src&&_8[i].src.match(/imgmap\w*\.js(\?.*?)?$/)){var _a=_8[i].src;_a=_a.substring(0,_a.lastIndexOf("/")+1);if(_7&&_a.indexOf("://")==-1){this.config.baseroot=_7+_a;}else{this.config.baseroot=_a;}
_9=true;break;}}
if(!_9&&this.config.baseroot===""){this.log("Unable to detect baseroot.",1);}}
if(this.isMSIE&&typeof window.CanvasRenderingContext2D=="undefined"&&typeof G_vmlCanvasManager=="undefined"){this.loadScript(this.config.baseroot+"excanvas.js");}
if(!this.config.lang){this.config.lang=this.detectLanguage();}
if(typeof imgmapStrings=="undefined"){this.loadScript(this.config.baseroot+"lang_"+this.config.lang+".js");}
var _9,j,le;for(i in this.config.custom_callbacks){if(this.config.custom_callbacks.hasOwnProperty(i)){_9=false;for(j=0,le=this.event_types.length;j<le;j++){if(i==this.event_types[j]){_9=true;break;}}
if(!_9){this.log("Unknown custom callback: "+i,1);}}}
this.addEvent(window,"load",this.onLoad.bind(this));return true;};imgmap.prototype.retryDelayed=function(fn,_e,_f){if(typeof fn.tries=="undefined"){fn.tries=0;}
if(fn.tries++<_f){window.setTimeout(function(){fn.apply(this);},_e);}};imgmap.prototype.onLoad=function(e){if(this.isLoaded){return true;}
var _11=this;if(typeof imgmapStrings=="undefined"){if(this.cntReloads++<5){window.setTimeout(function(){_11.onLoad(e);},1200);this.log("Delaying onload (language "+this.config.lang+" not loaded, try: "+this.cntReloads+")");return false;}else{if(this.config.lang!=this.config.defaultLang&&this.config.defaultLang!="en"){this.log("Falling back to default language: "+this.config.defaultLang);this.cntReloads=0;this.config.lang=this.config.defaultLang;this.loadScript(this.config.baseroot+"lang_"+this.config.lang+".js");window.setTimeout(function(){_11.onLoad(e);},1200);return false;}else{if(this.config.lang!="en"){this.log("Falling back to english language");this.cntReloads=0;this.config.lang="en";this.loadScript(this.config.baseroot+"lang_"+this.config.lang+".js");window.setTimeout(function(){_11.onLoad(e);},1200);return false;}}}}
try{this.loadStrings(imgmapStrings);}
catch(err){this.log("Unable to load language strings",1);}
if(this.isMSIE){if(typeof window.CanvasRenderingContext2D=="undefined"&&typeof G_vmlCanvasManager=="undefined"){this.log(this.strings.ERR_EXCANVAS_LOAD,2);}}
if(this.config.mode=="highlighter"){imgmap_spawnObjects(this.config);}
this.isLoaded=true;return true;};imgmap.prototype.addEvent=function(obj,evt,_14){if(obj.attachEvent){return obj.attachEvent("on"+evt,_14);}else{if(obj.addEventListener){obj.addEventListener(evt,_14,false);return true;}else{obj["on"+evt]=_14;}}};imgmap.prototype.removeEvent=function(obj,evt,_17){if(obj.detachEvent){return obj.detachEvent("on"+evt,_17);}else{if(obj.removeEventListener){obj.removeEventListener(evt,_17,false);return true;}else{obj["on"+evt]=null;}}};imgmap.prototype.addLoadEvent=function(obj,_19){if(obj.attachEvent){return obj.attachEvent("onreadystatechange",_19);}else{if(obj.addEventListener){obj.addEventListener("load",_19,false);return true;}else{obj.onload=_19;}}};imgmap.prototype.loadScript=function(url){if(url===""){return false;}
if(this.loadedScripts[url]==1){return true;}
this.log("Loading script: "+url);try{var _1b=document.getElementsByTagName("head")[0];var _1c=document.createElement("SCRIPT");_1c.setAttribute("language","javascript");_1c.setAttribute("type","text/javascript");_1c.setAttribute("src",url);_1b.appendChild(_1c);this.addLoadEvent(_1c,this.script_load.bind(this));}
catch(err){this.log("Error loading script: "+url);}
return true;};imgmap.prototype.script_load=function(e){var obj=(this.isMSIE)?window.event.srcElement:e.currentTarget;var url=obj.src;var _20=false;if(typeof obj.readyState!="undefined"){if(obj.readyState=="complete"||obj.readyState=="loaded"){_20=true;}}else{_20=true;}
if(_20){this.loadedScripts[url]=1;this.log("Loaded script: "+url);return true;}};imgmap.prototype.loadStrings=function(obj){for(var key in obj){if(obj.hasOwnProperty(key)){this.strings[key]=obj[key];}}};imgmap.prototype.loadImage=function(img,_24,_25){if(typeof this.pic_container=="undefined"){this.log("You must have pic_container defined to use loadImage!",2);return false;}
this.removeAllAreas();this.globalscale=1;this.fireEvent("onHtmlChanged","");if(!this._getLastArea()){if(this.config.mode!="editor2"){this.addNewArea();}}
if(typeof img=="string"){if(typeof this.pic=="undefined"){this.pic=document.createElement("IMG");this.pic_container.appendChild(this.pic);this.addEvent(this.pic,"mousedown",this.eventHandlers.img_mousedown=this.img_mousedown.bind(this));this.addEvent(this.pic,"mouseup",this.eventHandlers.img_mouseup=this.img_mouseup.bind(this));this.addEvent(this.pic,"mousemove",this.eventHandlers.img_mousemove=this.img_mousemove.bind(this));this.pic.style.cursor=this.config.cursor_default;}
this.log("Loading image: "+img,0);var q="?";if(img.indexOf("?")>-1){q="&";}
this.pic.src=img+q+(new Date().getTime());if(_24&&_24>0){this.pic.setAttribute("width",_24);}
if(_25&&_25>0){this.pic.setAttribute("height",_25);}
this.fireEvent("onLoadImage",this.pic);return true;}else{if(typeof img=="object"){var src=img.src;if(src===""&&img.getAttribute("mce_src")!==""){src=img.getAttribute("mce_src");}else{if(src===""&&img.getAttribute("_fcksavedurl")!==""){src=img.getAttribute("_fcksavedurl");}}
if(!_24){_24=img.clientWidth;}
if(!_25){_25=img.clientHeight;}
return this.loadImage(src,_24,_25);}}};imgmap.prototype.useImage=function(img){this.removeAllAreas();if(!this._getLastArea()){if(this.config.mode!="editor2"){this.addNewArea();}}
img=this.assignOID(img);if(typeof img=="object"){if(typeof this.pic!="undefined"){this.removeEvent(this.pic,"mousedown",this.eventHandlers.img_mousedown);this.removeEvent(this.pic,"mouseup",this.eventHandlers.img_mouseup);this.removeEvent(this.pic,"mousemove",this.eventHandlers.img_mousemove);this.pic.style.cursor="";}
this.pic=img;this.addEvent(this.pic,"mousedown",this.eventHandlers.img_mousedown=this.img_mousedown.bind(this));this.addEvent(this.pic,"mouseup",this.eventHandlers.img_mouseup=this.img_mouseup.bind(this));this.addEvent(this.pic,"mousemove",this.eventHandlers.img_mousemove=this.img_mousemove.bind(this));this.pic.style.cursor=this.config.cursor_default;if(this.pic.parentNode.className=="pic_container"){this.pic_container=this.pic.parentNode;}else{this.pic_container=document.createElement("div");this.pic_container.className="pic_container";this.pic.parentNode.insertBefore(this.pic_container,this.pic);this.pic_container.appendChild(this.pic);}
this.fireEvent("onLoadImage",this.pic);return true;}};imgmap.prototype.statusMessage=function(str){this.fireEvent("onStatusMessage",str);};imgmap.prototype.log=function(obj,_2b){if(_2b===""||typeof _2b=="undefined"){_2b=0;}
if(this.config.loglevel!=-1&&_2b>=this.config.loglevel){this.logStore.push({level:_2b,obj:obj});}
if(typeof console=="object"){console.log(obj);}else{if(this.isOpera){opera.postError(_2b+": "+obj);}else{if(typeof air=="object"){if(typeof air.Introspector=="object"){air.Introspector.Console.log(obj);}else{air.trace(obj);}}else{if(_2b>1){var msg="";for(var i=0,le=this.logStore.length;i<le;i++){msg+=this.logStore[i].level+": "+this.logStore[i].obj+"\n";}
alert(msg);}else{window.defaultStatus=(_2b+": "+obj);}}}}};imgmap.prototype.getMapHTML=function(_2f){var _30="<map id=\""+this.getMapId()+"\" name=\""+this.getMapName()+"\">\n"+this.getMapInnerHTML(_2f)+this.waterMark+"</map>";this.fireEvent("onGetMap",_30);return _30;};imgmap.prototype.getMapInnerHTML=function(_31){var _32,_33;_32="";for(var i=0,le=this.areas.length;i<le;i++){if(this.areas[i]){if(this.areas[i].shape&&this.areas[i].shape!="undefined"){_33=this.areas[i].lastInput;if(_31&&_31.match(/noscale/)){var cs=_33.split(",");for(var j=0,le2=cs.length;j<le2;j++){cs[j]=Math.round(cs[j]*this.globalscale);}
_33=cs.join(",");}
_32+="    <area shape=\""+this.areas[i].shape+"\""+" coords=\""+_33+"\""+" href=\""+this.areas[i].ahref+"\""+" target=\"_blank\" />\n";}}}
return _32;};imgmap.prototype.getMapName=function(){if(this.mapname===""){if(this.mapid!==""){return this.mapid;}
var now=new Date();this.mapname="imgmap"+now.getFullYear()+(now.getMonth()+1)+now.getDate()+now.getHours()+now.getMinutes()+now.getSeconds();}
return this.mapname;};imgmap.prototype.getMapId=function(){if(this.mapid===""){this.mapid=this.getMapName();}
return this.mapid;};imgmap.prototype._normShape=function(_3a){if(!_3a){return"rect";}
_3a=this.trim(_3a).toLowerCase();if(_3a.substring(0,4)=="rect"){return"rect";}
if(_3a.substring(0,4)=="circ"){return"circle";}
if(_3a.substring(0,4)=="poly"){return"poly";}
return"rect";};imgmap.prototype._normCoords=function(_3b,_3c,_3d){var i;var sx;var sy;var gx;var gy;var _43,le;_3b=this.trim(_3b);if(_3b===""){return"";}
var _45=_3b;_3b=_3b.replace(/(\d)(\D)+(\d)/g,"$1,$3");_3b=_3b.replace(/,\D+(\d)/g,",$1");_3b=_3b.replace(/,0+(\d)/g,",$1");_3b=_3b.replace(/(\d)(\D)+,/g,"$1,");_3b=_3b.replace(/^\D+(\d)/g,"$1");_3b=_3b.replace(/^0+(\d)/g,"$1");_3b=_3b.replace(/(\d)(\D)+$/g,"$1");var _46=_3b.split(",");if(_3c=="rect"){if(_3d=="fromcircle"){var r=_46[2];_46[0]=_46[0]-r;_46[1]=_46[1]-r;_46[2]=parseInt(_46[0],10)+2*r;_46[3]=parseInt(_46[1],10)+2*r;}else{if(_3d=="frompoly"){sx=parseInt(_46[0],10);gx=parseInt(_46[0],10);sy=parseInt(_46[1],10);gy=parseInt(_46[1],10);for(i=0,le=_46.length;i<le;i++){if(i%2===0&&parseInt(_46[i],10)<sx){sx=parseInt(_46[i],10);}
if(i%2===1&&parseInt(_46[i],10)<sy){sy=parseInt(_46[i],10);}
if(i%2===0&&parseInt(_46[i],10)>gx){gx=parseInt(_46[i],10);}
if(i%2===1&&parseInt(_46[i],10)>gy){gy=parseInt(_46[i],10);}}
_46[0]=sx;_46[1]=sy;_46[2]=gx;_46[3]=gy;}}
if(!(parseInt(_46[1],10)>=0)){_46[1]=_46[0];}
if(!(parseInt(_46[2],10)>=0)){_46[2]=parseInt(_46[0],10)+10;}
if(!(parseInt(_46[3],10)>=0)){_46[3]=parseInt(_46[1],10)+10;}
if(parseInt(_46[0],10)>parseInt(_46[2],10)){_43=_46[0];_46[0]=_46[2];_46[2]=_43;}
if(parseInt(_46[1],10)>parseInt(_46[3],10)){_43=_46[1];_46[1]=_46[3];_46[3]=_43;}
_3b=_46[0]+","+_46[1]+","+_46[2]+","+_46[3];}else{if(_3c=="circle"){if(_3d=="fromrect"){sx=parseInt(_46[0],10);gx=parseInt(_46[2],10);sy=parseInt(_46[1],10);gy=parseInt(_46[3],10);_46[2]=(gx-sx<gy-sy)?gx-sx:gy-sy;_46[2]=Math.floor(_46[2]/2);_46[0]=sx+_46[2];_46[1]=sy+_46[2];}else{if(_3d=="frompoly"){sx=parseInt(_46[0],10);gx=parseInt(_46[0],10);sy=parseInt(_46[1],10);gy=parseInt(_46[1],10);for(i=0,le=_46.length;i<le;i++){if(i%2===0&&parseInt(_46[i],10)<sx){sx=parseInt(_46[i],10);}
if(i%2===1&&parseInt(_46[i],10)<sy){sy=parseInt(_46[i],10);}
if(i%2===0&&parseInt(_46[i],10)>gx){gx=parseInt(_46[i],10);}
if(i%2===1&&parseInt(_46[i],10)>gy){gy=parseInt(_46[i],10);}}
_46[2]=(gx-sx<gy-sy)?gx-sx:gy-sy;_46[2]=Math.floor(_46[2]/2);_46[0]=sx+_46[2];_46[1]=sy+_46[2];}}
if(!(parseInt(_46[1],10)>0)){_46[1]=_46[0];}
if(!(parseInt(_46[2],10)>0)){_46[2]=10;}
_3b=_46[0]+","+_46[1]+","+_46[2];}else{if(_3c=="poly"){if(_3d=="fromrect"){_46[4]=_46[2];_46[5]=_46[3];_46[2]=_46[0];_46[6]=_46[4];_46[7]=_46[1];}else{if(_3d=="fromcircle"){var _48=parseInt(_46[0],10);var _49=parseInt(_46[1],10);var _4a=parseInt(_46[2],10);var j=0;_46[j++]=_48+_4a;_46[j++]=_49;var _4c=60;for(i=0;i<=_4c;i++){var _4d=i/_4c;var _4e=Math.cos(_4d*2*Math.PI);var _4f=Math.sin(_4d*2*Math.PI);var _50=_48+_4e*_4a;var _51=_49+_4f*_4a;_46[j++]=Math.round(_50);_46[j++]=Math.round(_51);}}}
_3b=_46.join(",");}else{if(_3c=="bezier1"){_3b=_46.join(",");}}}}
if(_3d=="preserve"&&_45!=_3b){return _45;}
return _3b;};imgmap.prototype.setMapHTML=function(map){if(this.viewmode===1){return;}
this.fireEvent("onSetMap",map);this.removeAllAreas();var _53;if(typeof map=="string"){var _54=document.createElement("DIV");_54.innerHTML=map;_53=_54.firstChild;}else{if(typeof map=="object"){_53=map;}}
if(!_53||_53.nodeName.toLowerCase()!=="map"){return false;}
this.mapname=_53.name;this.mapid=_53.id;var _55=_53.getElementsByTagName("area");var _56,_57,_58,alt,_5a,_5b,id;for(var i=0,le=_55.length;i<le;i++){_56=_57=_58=alt=_5a=_5b="";id=this.addNewArea();_56=this._normShape(_55[i].getAttribute("shape",2));this.initArea(id,_56);if(_55[i].getAttribute("coords",2)){_57=this._normCoords(_55[i].getAttribute("coords",2),_56);this.areas[id].lastInput=_57;}
_58=_55[i].getAttribute("href",2);var _5f=_55[i].getAttribute("_fcksavedurl");if(_5f){_58=_5f;}
if(_58){this.areas[id].ahref=_58;}
alt=_55[i].getAttribute("alt");if(alt){this.areas[id].aalt=alt;}
_5a=_55[i].getAttribute("title");if(!_5a){_5a=alt;}
if(_5a){this.areas[id].atitle=_5a;}
_5b=_55[i].getAttribute("target");if(_5b){_5b=_5b.toLowerCase();}
this.areas[id].atarget=_5b;this._recalculate(id,_57);this.relaxArea(id);this.fireEvent("onAreaChanged",this.areas[id]);}
this.fireEvent("onHtmlChanged",this.getMapHTML());return true;};imgmap.prototype.togglePreview=function(){var i,le;if(!this.pic){return false;}
if(!this.preview){this.preview=document.createElement("DIV");this.preview.style.display="none";this.pic_container.appendChild(this.preview);}
if(this.viewmode===0){for(i=0,le=this.areas.length;i<le;i++){if(this.areas[i]){this.areas[i].style.display="none";if(this.areas[i].label){this.areas[i].label.style.display="none";}}}
this.preview.innerHTML=this.getMapHTML("noscale");this.pic.setAttribute("border","0",0);this.pic.setAttribute("usemap","#"+this.mapname,0);this.pic.style.cursor="auto";this.viewmode=1;this.statusMessage(this.strings.PREVIEW_MODE);}else{for(i=0,le=this.areas.length;i<le;i++){if(this.areas[i]){this.areas[i].style.display="";if(this.areas[i].label&&this.config.label){this.areas[i].label.style.display="";}}}
this.preview.innerHTML="";this.pic.style.cursor=this.config.cursor_default;this.pic.removeAttribute("usemap",0);this.viewmode=0;this.statusMessage(this.strings.DESIGN_MODE);this.is_drawing=0;}
this.fireEvent("onModeChanged",this.viewmode);return this.viewmode;};imgmap.prototype.addNewArea=function(){if(this.viewmode===1){return;}
var _62=this._getLastArea();var id=(_62)?_62.aid+1:0;this.areas[id]=document.createElement("DIV");this.areas[id].id=this.mapname+"area"+id;this.areas[id].aid=id;this.areas[id].shape="undefined";this.currentid=id;this.fireEvent("onAddArea",id);return id;};imgmap.prototype.initArea=function(id,_65){if(!this.areas[id]){return false;}
if(this.areas[id].parentNode){this.areas[id].parentNode.removeChild(this.areas[id]);}
if(this.areas[id].label){this.areas[id].label.parentNode.removeChild(this.areas[id].label);}
this.areas[id]=null;this.areas[id]=document.createElement("CANVAS");this.pic_container.appendChild(this.areas[id]);this.pic_container.style.position="relative";if(typeof G_vmlCanvasManager!="undefined"){this.areas[id]=G_vmlCanvasManager.initElement(this.areas[id]);}
this.areas[id].id=this.mapname+"area"+id;this.areas[id].aid=id;this.areas[id].shape=_65;this.areas[id].ahref="";this.areas[id].atitle="";this.areas[id].aalt="";this.areas[id].atarget="";this.areas[id].style.position="absolute";this.areas[id].style.top=this.pic.offsetTop+"px";this.areas[id].style.left=this.pic.offsetLeft+"px";this._setopacity(this.areas[id],this.config.CL_DRAW_BG,this.config.draw_opacity);this.areas[id].ondblclick=this.area_dblclick.bind(this);this.areas[id].onmousedown=this.area_mousedown.bind(this);this.areas[id].onmouseup=this.area_mouseup.bind(this);this.areas[id].onmousemove=this.area_mousemove.bind(this);this.areas[id].onmouseover=this.area_mouseover.bind(this);this.areas[id].onmouseout=this.area_mouseout.bind(this);this.memory[id]={};this.memory[id].downx=0;this.memory[id].downy=0;this.memory[id].left=0;this.memory[id].top=0;this.memory[id].width=0;this.memory[id].height=0;this.memory[id].xpoints=[];this.memory[id].ypoints=[];this.areas[id].label=document.createElement("DIV");this.pic_container.appendChild(this.areas[id].label);this.areas[id].label.className=this.config.label_class;this.assignCSS(this.areas[id].label,this.config.label_style);this.areas[id].label.style.position="absolute";};imgmap.prototype.relaxArea=function(id){if(!this.areas[id]){return;}
this.fireEvent("onRelaxArea",id);this._setBorder(id,"NORM");this._setopacity(this.areas[id],this.config.CL_NORM_BG,this.config.norm_opacity);};imgmap.prototype.relaxAllAreas=function(){for(var i=0,le=this.areas.length;i<le;i++){if(this.areas[i]){this.relaxArea(i);}}};imgmap.prototype._setBorder=function(id,_6a){if(this.areas[id].shape=="rect"||this.config.bounding_box){this.areas[id].style.borderWidth="1px";this.areas[id].style.borderStyle=(_6a=="DRAW"?"dotted":"solid");this.areas[id].style.borderColor=this.config["CL_"+_6a+"_"+(this.areas[id].shape=="rect"?"SHAPE":"BOX")];}else{this.areas[id].style.border="";}};imgmap.prototype._setopacity=function(_6b,_6c,pct){if(_6c){_6b.style.backgroundColor=_6c;}
if(pct&&typeof pct=="string"&&pct.match(/^\d*\-\d+$/)){var _6e=pct.split("-");if(typeof _6e[0]!="undefined"){_6e[0]=parseInt(_6e[0],10);this._setopacity(_6b,_6c,_6e[0]);}
if(typeof _6e[1]!="undefined"){_6e[1]=parseInt(_6e[1],10);var _6f=this._getopacity(_6b);var _70=this;var _71=Math.round(_6e[1]-_6f);if(_71>5){window.setTimeout(function(){_70._setopacity(_6b,null,"-"+_6e[1]);},20);pct=1*_6f+5;}else{if(_71<-3){window.setTimeout(function(){_70._setopacity(_6b,null,"-"+_6e[1]);},20);pct=1*_6f-3;}else{pct=_6e[1];}}}}
if(!isNaN(pct)){pct=Math.round(parseInt(pct,10));_6b.style.opacity=pct/100;_6b.style.filter="alpha(opacity="+pct+")";}};imgmap.prototype._getopacity=function(_72){if(_72.style.opacity<=1){return _72.style.opacity*100;}
if(_72.style.filter){return parseInt(_72.style.filter.replace(/alpha\(opacity\=([^\)]*)\)/ig,"$1"),10);}
return 100;};imgmap.prototype.removeArea=function(id,_74){if(this.viewmode===1){return;}
if(id===null||typeof id=="undefined"){return;}
try{this.areas[id].label.parentNode.removeChild(this.areas[id].label);this.areas[id].parentNode.removeChild(this.areas[id]);this.areas[id].label.className=null;this.areas[id].label=null;this.areas[id].onmouseover=null;this.areas[id].onmouseout=null;this.areas[id].onmouseup=null;this.areas[id].onmousedown=null;this.areas[id].onmousemove=null;}
catch(err){}
this.areas[id]=null;this.fireEvent("onRemoveArea",id);if(!_74){this.fireEvent("onHtmlChanged",this.getMapHTML());}};imgmap.prototype.removeAllAreas=function(){for(var i=0,le=this.areas.length;i<le;i++){if(this.areas[i]){this.removeArea(i,true);}}
this.fireEvent("onHtmlChanged",this.getMapHTML());};imgmap.prototype.scaleAllAreas=function(_77){var _78=1;try{_78=_77/this.globalscale;}
catch(err){this.log("Invalid (global)scale",1);}
this.globalscale=_77;for(var i=0,le=this.areas.length;i<le;i++){if(this.areas[i]&&this.areas[i].shape!="undefined"){this.scaleArea(i,_78);}}};imgmap.prototype.scaleArea=function(id,_7c){this.areas[id].style.top=parseInt(this.areas[id].style.top,10)*_7c+"px";this.areas[id].style.left=parseInt(this.areas[id].style.left,10)*_7c+"px";this.setAreaSize(id,this.areas[id].width*_7c,this.areas[id].height*_7c);if(this.areas[id].shape=="poly"||this.areas[id].shape=="bezier1"){for(var i=0,le=this.areas[id].xpoints.length;i<le;i++){this.areas[id].xpoints[i]*=_7c;this.areas[id].ypoints[i]*=_7c;}}
this._repaint(this.areas[id],this.config.CL_NORM_SHAPE);this._updatecoords(id);};imgmap.prototype._putlabel=function(id){if(this.viewmode===1){return;}
if(!this.areas[id].label){return;}
try{if(!this.config.label){this.areas[id].label.innerHTML="";this.areas[id].label.style.display="none";}else{this.areas[id].label.style.display="";var _80=this.config.label;_80=_80.replace(/%n/g,String(id));_80=_80.replace(/%c/g,String(this.areas[id].lastInput));_80=_80.replace(/%h/g,String(this.areas[id].ahref));_80=_80.replace(/%a/g,String(this.areas[id].aalt));_80=_80.replace(/%t/g,String(this.areas[id].atitle));this.areas[id].label.innerHTML=_80;}
this.areas[id].label.style.top=this.areas[id].style.top;this.areas[id].label.style.left=this.areas[id].style.left;}
catch(err){this.log("Error putting label",1);}};imgmap.prototype._puthint=function(id){try{if(!this.config.hint){this.areas[id].title="";this.areas[id].alt="";}else{var _82=this.config.hint;_82=_82.replace(/%n/g,String(id));_82=_82.replace(/%c/g,String(this.areas[id].lastInput));_82=_82.replace(/%h/g,String(this.areas[id].ahref));_82=_82.replace(/%a/g,String(this.areas[id].aalt));_82=_82.replace(/%t/g,String(this.areas[id].atitle));this.areas[id].title=_82;this.areas[id].alt=_82;}}
catch(err){this.log("Error putting hint",1);}};imgmap.prototype._repaintAll=function(){for(var i=0,le=this.areas.length;i<le;i++){if(this.areas[i]){this._repaint(this.areas[i],this.config.CL_NORM_SHAPE);}}};imgmap.prototype._repaint=function(_85,_86,x,y){var ctx;var _8a,_8b,_8c,top;var i,le;if(_85.shape=="circle"){_8a=parseInt(_85.style.width,10);var _90=Math.floor(_8a/2)-1;ctx=_85.getContext("2d");ctx.clearRect(0,0,_8a,_8a);ctx.beginPath();ctx.strokeStyle=_86;ctx.arc(_90,_90,_90,0,Math.PI*2,0);ctx.stroke();ctx.closePath();ctx.strokeStyle=this.config.CL_KNOB;ctx.strokeRect(_90,_90,1,1);this._putlabel(_85.aid);this._puthint(_85.aid);}else{if(_85.shape=="rect"){this._putlabel(_85.aid);this._puthint(_85.aid);}else{if(_85.shape=="poly"){_8a=parseInt(_85.style.width,10);_8b=parseInt(_85.style.height,10);_8c=parseInt(_85.style.left,10);top=parseInt(_85.style.top,10);if(_85.xpoints){ctx=_85.getContext("2d");ctx.clearRect(0,0,_8a,_8b);ctx.beginPath();ctx.strokeStyle=_86;ctx.moveTo(_85.xpoints[0]-_8c,_85.ypoints[0]-top);for(i=1,le=_85.xpoints.length;i<le;i++){ctx.lineTo(_85.xpoints[i]-_8c,_85.ypoints[i]-top);}
if(this.is_drawing==this.DM_POLYGON_DRAW||this.is_drawing==this.DM_POLYGON_LASTDRAW){ctx.lineTo(x-_8c-5,y-top-5);}
ctx.lineTo(_85.xpoints[0]-_8c,_85.ypoints[0]-top);ctx.stroke();ctx.closePath();}
this._putlabel(_85.aid);this._puthint(_85.aid);}else{if(_85.shape=="bezier1"){_8a=parseInt(_85.style.width,10);_8b=parseInt(_85.style.height,10);_8c=parseInt(_85.style.left,10);top=parseInt(_85.style.top,10);if(_85.xpoints){ctx=_85.getContext("2d");ctx.clearRect(0,0,_8a,_8b);ctx.beginPath();ctx.strokeStyle=_86;ctx.moveTo(_85.xpoints[0]-_8c,_85.ypoints[0]-top);for(i=2,le=_85.xpoints.length;i<le;i+=2){ctx.quadraticCurveTo(_85.xpoints[i-1]-_8c,_85.ypoints[i-1]-top,_85.xpoints[i]-_8c,_85.ypoints[i]-top);}
if(this.is_drawing==this.DM_BEZIER_DRAW||this.is_drawing==this.DM_BEZIER_LASTDRAW){if(_85.xpoints.length%2===0&&_85.xpoints.length>1){ctx.quadraticCurveTo(_85.xpoints[_85.xpoints.length-1]-_8c-5,_85.ypoints[_85.ypoints.length-1]-top-5,x-_8c-5,y-top-5);}else{ctx.lineTo(x-_8c-5,y-top-5);}}
ctx.lineTo(_85.xpoints[0]-_8c,_85.ypoints[0]-top);ctx.stroke();ctx.closePath();}
this._putlabel(_85.aid);this._puthint(_85.aid);}}}}};imgmap.prototype._updatecoords=function(id){var _92=Math.round(parseInt(this.areas[id].style.left,10)/this.globalscale);var top=Math.round(parseInt(this.areas[id].style.top,10)/this.globalscale);var _94=Math.round(parseInt(this.areas[id].style.height,10)/this.globalscale);var _95=Math.round(parseInt(this.areas[id].style.width,10)/this.globalscale);var _96="";if(this.areas[id].shape=="rect"){_96=_92+","+top+","+(_92+_95)+","+(top+_94);this.areas[id].lastInput=_96;}else{if(this.areas[id].shape=="circle"){var _97=Math.floor(_95/2)-1;_96=(_92+_97)+","+(top+_97)+","+_97;this.areas[id].lastInput=_96;}else{if(this.areas[id].shape=="poly"||this.areas[id].shape=="bezier1"){if(this.areas[id].xpoints){for(var i=0,le=this.areas[id].xpoints.length;i<le;i++){_96+=Math.round(this.areas[id].xpoints[i]/this.globalscale)+","+Math.round(this.areas[id].ypoints[i]/this.globalscale)+",";}
_96=_96.substring(0,_96.length-1);}
this.areas[id].lastInput=_96;}}}
this.fireEvent("onAreaChanged",this.areas[id]);this.fireEvent("onHtmlChanged",this.getMapHTML());};imgmap.prototype._recalculate=function(id,_9b){try{if(_9b){_9b=this._normCoords(_9b,this.areas[id].shape,"preserve");}else{_9b=this.areas[id].lastInput||"";}
var _9c=_9b.split(",");if(this.areas[id].shape=="rect"){if(_9c.length!=4||parseInt(_9c[0],10)>parseInt(_9c[2],10)||parseInt(_9c[1],10)>parseInt(_9c[3],10)){throw"invalid coords";}
this.areas[id].style.left=this.globalscale*(this.pic.offsetLeft+parseInt(_9c[0],10))+"px";this.areas[id].style.top=this.globalscale*(this.pic.offsetTop+parseInt(_9c[1],10))+"px";this.setAreaSize(id,this.globalscale*(_9c[2]-_9c[0]),this.globalscale*(_9c[3]-_9c[1]));this._repaint(this.areas[id],this.config.CL_NORM_SHAPE);}else{if(this.areas[id].shape=="circle"){if(_9c.length!=3||parseInt(_9c[2],10)<0){throw"invalid coords";}
var _9d=2*(_9c[2]);this.setAreaSize(id,this.globalscale*_9d,this.globalscale*_9d);this.areas[id].style.left=this.globalscale*(this.pic.offsetLeft+parseInt(_9c[0],10)-_9d/2)+"px";this.areas[id].style.top=this.globalscale*(this.pic.offsetTop+parseInt(_9c[1],10)-_9d/2)+"px";this._repaint(this.areas[id],this.config.CL_NORM_SHAPE);}else{if(this.areas[id].shape=="poly"||this.areas[id].shape=="bezier1"){if(_9c.length<2){throw"invalid coords";}
this.areas[id].xpoints=[];this.areas[id].ypoints=[];for(var i=0,le=_9c.length;i<le;i+=2){this.areas[id].xpoints[this.areas[id].xpoints.length]=this.globalscale*(this.pic.offsetLeft+parseInt(_9c[i],10));this.areas[id].ypoints[this.areas[id].ypoints.length]=this.globalscale*(this.pic.offsetTop+parseInt(_9c[i+1],10));this._polygongrow(this.areas[id],this.globalscale*_9c[i],this.globalscale*_9c[i+1]);}
this._polygonshrink(this.areas[id]);}}}}
catch(err){var msg=(err.message)?err.message:"error calculating coordinates";this.log(msg,1);this.statusMessage(this.strings.ERR_INVALID_COORDS);if(this.areas[id].lastInput){this.fireEvent("onAreaChanged",this.areas[id]);}
this._repaint(this.areas[id],this.config.CL_NORM_SHAPE);return;}
this.areas[id].lastInput=_9b;};imgmap.prototype._polygongrow=function(_a1,_a2,_a3){var _a4=_a2-parseInt(_a1.style.left,10);var _a5=_a3-parseInt(_a1.style.top,10);var pad=0;var _a7=0;if(_a2<parseInt(_a1.style.left,10)){_a1.style.left=(_a2-pad)+"px";this.setAreaSize(_a1.aid,parseInt(_a1.style.width,10)+Math.abs(_a4)+_a7,null);}else{if(_a2>parseInt(_a1.style.left,10)+parseInt(_a1.style.width,10)){this.setAreaSize(_a1.aid,_a2-parseInt(_a1.style.left,10)+_a7,null);}}
if(_a3<parseInt(_a1.style.top,10)){_a1.style.top=(_a3-pad)+"px";this.setAreaSize(_a1.aid,null,parseInt(_a1.style.height,10)+Math.abs(_a5)+_a7);}else{if(_a3>parseInt(_a1.style.top,10)+parseInt(_a1.style.height,10)){this.setAreaSize(_a1.aid,null,_a3-parseInt(_a1.style.top,10)+_a7);}}};imgmap.prototype._polygonshrink=function(_a8){_a8.style.left=(_a8.xpoints[0])+"px";_a8.style.top=(_a8.ypoints[0])+"px";this.setAreaSize(_a8.aid,0,0);for(var i=0,le=_a8.xpoints.length;i<le;i++){this._polygongrow(_a8,_a8.xpoints[i],_a8.ypoints[i]);}
this._repaint(_a8,this.config.CL_NORM_SHAPE);};imgmap.prototype.img_mousemove=function(e){var x;var y;var _ae;var _af;var _b0;if(this.viewmode===1){return;}
var pos=this._getPos(this.pic);x=(this.isMSIE)?(window.event.x-this.pic.offsetLeft):(e.pageX-pos.x);y=(this.isMSIE)?(window.event.y-this.pic.offsetTop):(e.pageY-pos.y);x=x+this.pic_container.scrollLeft;y=y+this.pic_container.scrollTop;if(x<0||y<0||x>this.pic.width||y>this.pic.height){return;}
if(this.memory[this.currentid]){var top=this.memory[this.currentid].top;var _b3=this.memory[this.currentid].left;var _b4=this.memory[this.currentid].height;var _b5=this.memory[this.currentid].width;}
if(this.isSafari){if(e.shiftKey){if(this.is_drawing==this.DM_RECTANGLE_DRAW){this.is_drawing=this.DM_SQUARE_DRAW;this.statusMessage(this.strings.SQUARE2_DRAW);}}else{if(this.is_drawing==this.DM_SQUARE_DRAW&&this.areas[this.currentid].shape=="rect"){this.is_drawing=this.DM_RECTANGLE_DRAW;this.statusMessage(this.strings.RECTANGLE_DRAW);}}}
if(this.is_drawing==this.DM_RECTANGLE_DRAW){this.fireEvent("onDrawArea",this.currentid);_ae=x-this.memory[this.currentid].downx;_af=y-this.memory[this.currentid].downy;this.setAreaSize(this.currentid,Math.abs(_ae),Math.abs(_af));if(_ae<0){this.areas[this.currentid].style.left=(x+1)+"px";}
if(_af<0){this.areas[this.currentid].style.top=(y+1)+"px";}}else{if(this.is_drawing==this.DM_SQUARE_DRAW){this.fireEvent("onDrawArea",this.currentid);_ae=x-this.memory[this.currentid].downx;_af=y-this.memory[this.currentid].downy;if(Math.abs(_ae)<Math.abs(_af)){_b0=Math.abs(parseInt(_ae,10));}else{_b0=Math.abs(parseInt(_af,10));}
this.setAreaSize(this.currentid,_b0,_b0);if(_ae<0){this.areas[this.currentid].style.left=(this.memory[this.currentid].downx+_b0*-1)+"px";}
if(_af<0){this.areas[this.currentid].style.top=(this.memory[this.currentid].downy+_b0*-1+1)+"px";}}else{if(this.is_drawing==this.DM_POLYGON_DRAW||this.is_drawing==this.DM_BEZIER_DRAW){this.fireEvent("onDrawArea",this.currentid);this._polygongrow(this.areas[this.currentid],x,y);}else{if(this.is_drawing==this.DM_RECTANGLE_MOVE||this.is_drawing==this.DM_SQUARE_MOVE){this.fireEvent("onMoveArea",this.currentid);x=x-this.memory[this.currentid].rdownx;y=y-this.memory[this.currentid].rdowny;if(x+_b5>this.pic.width||y+_b4>this.pic.height){return;}
if(x<0||y<0){return;}
this.areas[this.currentid].style.left=x+1+"px";this.areas[this.currentid].style.top=y+1+"px";}else{if(this.is_drawing==this.DM_POLYGON_MOVE||this.is_drawing==this.DM_BEZIER_MOVE){this.fireEvent("onMoveArea",this.currentid);x=x-this.memory[this.currentid].rdownx;y=y-this.memory[this.currentid].rdowny;if(x+_b5>this.pic.width||y+_b4>this.pic.height){return;}
if(x<0||y<0){return;}
_ae=x-_b3;_af=y-top;if(this.areas[this.currentid].xpoints){for(var i=0,le=this.areas[this.currentid].xpoints.length;i<le;i++){this.areas[this.currentid].xpoints[i]=this.memory[this.currentid].xpoints[i]+_ae;this.areas[this.currentid].ypoints[i]=this.memory[this.currentid].ypoints[i]+_af;}}
this.areas[this.currentid].style.left=x+"px";this.areas[this.currentid].style.top=y+"px";}else{if(this.is_drawing==this.DM_SQUARE_RESIZE_LEFT){this.fireEvent("onResizeArea",this.currentid);_b0=x-_b3;if((_b5+(-1*_b0))>0){this.areas[this.currentid].style.left=x+1+"px";this.areas[this.currentid].style.top=(top+(_b0/2))+"px";this.setAreaSize(this.currentid,parseInt(_b5+(-1*_b0),10),parseInt(_b4+(-1*_b0),10));}else{this.memory[this.currentid].width=0;this.memory[this.currentid].height=0;this.memory[this.currentid].left=x;this.memory[this.currentid].top=y;this.is_drawing=this.DM_SQUARE_RESIZE_RIGHT;}}else{if(this.is_drawing==this.DM_SQUARE_RESIZE_RIGHT){this.fireEvent("onResizeArea",this.currentid);_b0=x-_b3-_b5;if((_b5+(_b0))-1>0){this.areas[this.currentid].style.top=(top+(-1*_b0/2))+"px";this.setAreaSize(this.currentid,(_b5+(_b0))-1,(_b4+(_b0)));}else{this.memory[this.currentid].width=0;this.memory[this.currentid].height=0;this.memory[this.currentid].left=x;this.memory[this.currentid].top=y;this.is_drawing=this.DM_SQUARE_RESIZE_LEFT;}}else{if(this.is_drawing==this.DM_SQUARE_RESIZE_TOP){this.fireEvent("onResizeArea",this.currentid);_b0=y-top;if((_b5+(-1*_b0))>0){this.areas[this.currentid].style.top=y+1+"px";this.areas[this.currentid].style.left=(_b3+(_b0/2))+"px";this.setAreaSize(this.currentid,(_b5+(-1*_b0)),(_b4+(-1*_b0)));}else{this.memory[this.currentid].width=0;this.memory[this.currentid].height=0;this.memory[this.currentid].left=x;this.memory[this.currentid].top=y;this.is_drawing=this.DM_SQUARE_RESIZE_BOTTOM;}}else{if(this.is_drawing==this.DM_SQUARE_RESIZE_BOTTOM){this.fireEvent("onResizeArea",this.currentid);_b0=y-top-_b4;if((_b5+(_b0))-1>0){this.areas[this.currentid].style.left=(_b3+(-1*_b0/2))+"px";this.setAreaSize(this.currentid,(_b5+(_b0))-1,(_b4+(_b0))-1);}else{this.memory[this.currentid].width=0;this.memory[this.currentid].height=0;this.memory[this.currentid].left=x;this.memory[this.currentid].top=y;this.is_drawing=this.DM_SQUARE_RESIZE_TOP;}}else{if(this.is_drawing==this.DM_RECTANGLE_RESIZE_LEFT){this.fireEvent("onResizeArea",this.currentid);_ae=x-_b3;if(_b5+(-1*_ae)>0){this.areas[this.currentid].style.left=x+1+"px";this.setAreaSize(this.currentid,_b5+(-1*_ae),null);}else{this.memory[this.currentid].width=0;this.memory[this.currentid].left=x;this.is_drawing=this.DM_RECTANGLE_RESIZE_RIGHT;}}else{if(this.is_drawing==this.DM_RECTANGLE_RESIZE_RIGHT){this.fireEvent("onResizeArea",this.currentid);_ae=x-_b3-_b5;if((_b5+(_ae))-1>0){this.setAreaSize(this.currentid,(_b5+(_ae))-1,null);}else{this.memory[this.currentid].width=0;this.memory[this.currentid].left=x;this.is_drawing=this.DM_RECTANGLE_RESIZE_LEFT;}}else{if(this.is_drawing==this.DM_RECTANGLE_RESIZE_TOP){this.fireEvent("onResizeArea",this.currentid);_af=y-top;if((_b4+(-1*_af))>0){this.areas[this.currentid].style.top=y+1+"px";this.setAreaSize(this.currentid,null,(_b4+(-1*_af)));}else{this.memory[this.currentid].height=0;this.memory[this.currentid].top=y;this.is_drawing=this.DM_RECTANGLE_RESIZE_BOTTOM;}}else{if(this.is_drawing==this.DM_RECTANGLE_RESIZE_BOTTOM){this.fireEvent("onResizeArea",this.currentid);_af=y-top-_b4;if((_b4+(_af))-1>0){this.setAreaSize(this.currentid,null,(_b4+(_af))-1);}else{this.memory[this.currentid].height=0;this.memory[this.currentid].top=y;this.is_drawing=this.DM_RECTANGLE_RESIZE_TOP;}}}}}}}}}}}}}}
if(this.is_drawing){this._repaint(this.areas[this.currentid],this.config.CL_DRAW_SHAPE,x,y);this._updatecoords(this.currentid);}};imgmap.prototype.img_mouseup=function(e){if(this.viewmode===1){return;}
var pos=this._getPos(this.pic);var x=(this.isMSIE)?(window.event.x-this.pic.offsetLeft):(e.pageX-pos.x);var y=(this.isMSIE)?(window.event.y-this.pic.offsetTop):(e.pageY-pos.y);x=x+this.pic_container.scrollLeft;y=y+this.pic_container.scrollTop;if(this.is_drawing!=this.DM_RECTANGLE_DRAW&&this.is_drawing!=this.DM_SQUARE_DRAW&&this.is_drawing!=this.DM_POLYGON_DRAW&&this.is_drawing!=this.DM_POLYGON_LASTDRAW&&this.is_drawing!=this.DM_BEZIER_DRAW&&this.is_drawing!=this.DM_BEZIER_LASTDRAW){this.draggedId=null;this.is_drawing=0;this.statusMessage(this.strings.READY);this.relaxArea(this.currentid);if(this.areas[this.currentid]==this._getLastArea()){return;}
this.memory[this.currentid].downx=x;this.memory[this.currentid].downy=y;}};imgmap.prototype.img_mousedown=function(e){if(this.viewmode===1){return;}
if(!this.areas[this.currentid]&&this.config.mode!="editor2"){return;}
var pos=this._getPos(this.pic);var x=(this.isMSIE)?(window.event.x-this.pic.offsetLeft):(e.pageX-pos.x);var y=(this.isMSIE)?(window.event.y-this.pic.offsetTop):(e.pageY-pos.y);x=x+this.pic_container.scrollLeft;y=y+this.pic_container.scrollTop;if(!e){e=window.event;}
if(e.shiftKey){if(this.is_drawing==this.DM_POLYGON_DRAW){this.is_drawing=this.DM_POLYGON_LASTDRAW;}else{if(this.is_drawing==this.DM_BEZIER_DRAW){this.is_drawing=this.DM_BEZIER_LASTDRAW;}}}
if(this.is_drawing==this.DM_POLYGON_DRAW||this.is_drawing==this.DM_BEZIER_DRAW){this.areas[this.currentid].xpoints[this.areas[this.currentid].xpoints.length]=x-5;this.areas[this.currentid].ypoints[this.areas[this.currentid].ypoints.length]=y-5;this.memory[this.currentid].downx=x;this.memory[this.currentid].downy=y;return;}else{if(this.is_drawing&&this.is_drawing!=this.DM_POLYGON_DRAW&&this.is_drawing!=this.DM_BEZIER_DRAW){if(this.is_drawing==this.DM_POLYGON_LASTDRAW||this.is_drawing==this.DM_BEZIER_LASTDRAW){this.areas[this.currentid].xpoints[this.areas[this.currentid].xpoints.length]=x-5;this.areas[this.currentid].ypoints[this.areas[this.currentid].ypoints.length]=y-5;this._updatecoords(this.currentid);this.is_drawing=0;this._polygonshrink(this.areas[this.currentid]);}
this.is_drawing=0;this.statusMessage(this.strings.READY);this.relaxArea(this.currentid);if(this.areas[this.currentid]==this._getLastArea()){if(this.config.mode!="editor2"){this.addNewArea();}
return;}
return;}}
if(this.config.mode=="editor2"){if(!this.nextShape){return;}
this.addNewArea();this.initArea(this.currentid,this.nextShape);}else{if(this.areas[this.currentid].shape=="undefined"||this.areas[this.currentid].shape=="poly"){var _c0=this.nextShape;if(!_c0){_c0="rect";}
this.initArea(this.currentid,_c0);}}
if(this.areas[this.currentid].shape=="poly"){this.is_drawing=this.DM_POLYGON_DRAW;this.statusMessage(this.strings.POLYGON_DRAW);this.areas[this.currentid].style.left=x+"px";this.areas[this.currentid].style.top=y+"px";this.areas[this.currentid].style.width=0;this.areas[this.currentid].style.height=0;this.areas[this.currentid].xpoints=[];this.areas[this.currentid].ypoints=[];this.areas[this.currentid].xpoints[0]=x;this.areas[this.currentid].ypoints[0]=y;}else{if(this.areas[this.currentid].shape=="bezier1"){this.is_drawing=this.DM_BEZIER_DRAW;this.statusMessage(this.strings.BEZIER_DRAW);this.areas[this.currentid].style.left=x+"px";this.areas[this.currentid].style.top=y+"px";this.areas[this.currentid].style.width=0;this.areas[this.currentid].style.height=0;this.areas[this.currentid].xpoints=[];this.areas[this.currentid].ypoints=[];this.areas[this.currentid].xpoints[0]=x;this.areas[this.currentid].ypoints[0]=y;}else{if(this.areas[this.currentid].shape=="rect"){this.is_drawing=this.DM_RECTANGLE_DRAW;this.statusMessage(this.strings.RECTANGLE_DRAW);this.areas[this.currentid].style.left=x+"px";this.areas[this.currentid].style.top=y+"px";this.areas[this.currentid].style.width=0;this.areas[this.currentid].style.height=0;}else{if(this.areas[this.currentid].shape=="circle"){this.is_drawing=this.DM_SQUARE_DRAW;this.statusMessage(this.strings.SQUARE_DRAW);this.areas[this.currentid].style.left=x+"px";this.areas[this.currentid].style.top=y+"px";this.areas[this.currentid].style.width=0;this.areas[this.currentid].style.height=0;}}}}
this._setBorder(this.currentid,"DRAW");this.memory[this.currentid].downx=x;this.memory[this.currentid].downy=y;};imgmap.prototype.highlightArea=function(id,_c2){if(this.is_drawing){return;}
if(this.areas[id]&&this.areas[id].shape!="undefined"){this.fireEvent("onFocusArea",this.areas[id]);this._setBorder(id,"HIGHLIGHT");var _c3=this.config.highlight_opacity;if(_c2=="grad"){_c3="-"+_c3;}
this._setopacity(this.areas[id],this.config.CL_HIGHLIGHT_BG,_c3);this._repaint(this.areas[id],this.config.CL_HIGHLIGHT_SHAPE);}};imgmap.prototype.blurArea=function(id,_c5){if(this.is_drawing){return;}
if(this.areas[id]&&this.areas[id].shape!="undefined"){this.fireEvent("onBlurArea",this.areas[id]);this._setBorder(id,"NORM");var _c6=this.config.norm_opacity;if(_c5=="grad"){_c6="-"+_c6;}
this._setopacity(this.areas[id],this.config.CL_NORM_BG,_c6);this._repaint(this.areas[id],this.config.CL_NORM_SHAPE);}};imgmap.prototype.area_mousemove=function(e){if(this.viewmode===1){return;}
if(!this.is_drawing){var obj=(this.isMSIE)?window.event.srcElement:e.currentTarget;if(obj.tagName=="DIV"){obj=obj.parentNode;}
if(obj.tagName=="image"||obj.tagName=="group"||obj.tagName=="shape"||obj.tagName=="stroke"){obj=obj.parentNode.parentNode;}
if(this.isOpera){e.layerX=e.offsetX;e.layerY=e.offsetY;}
var _c9=(this.isMSIE)?(window.event.offsetX):(e.layerX);var _ca=(this.isMSIE)?(window.event.offsetY):(e.layerY);var _cb=(obj.shape=="rect"||obj.shape=="circle");if(_cb&&_c9<6&&_ca>6){obj.style.cursor="w-resize";}else{if(_cb&&_c9>parseInt(obj.style.width,10)-6&&_ca>6){obj.style.cursor="e-resize";}else{if(_cb&&_c9>6&&_ca<6){obj.style.cursor="n-resize";}else{if(_cb&&_ca>parseInt(obj.style.height,10)-6&&_c9>6){obj.style.cursor="s-resize";}else{obj.style.cursor="move";}}}}
if(obj.aid!=this.draggedId){if(obj.style.cursor=="move"){obj.style.cursor="default";}
return;}
if(_c9<6&&_ca>6){if(this.areas[this.currentid].shape=="circle"){this.is_drawing=this.DM_SQUARE_RESIZE_LEFT;this.statusMessage(this.strings.SQUARE_RESIZE_LEFT);}else{if(this.areas[this.currentid].shape=="rect"){this.is_drawing=this.DM_RECTANGLE_RESIZE_LEFT;this.statusMessage(this.strings.RECTANGLE_RESIZE_LEFT);}}}else{if(_c9>parseInt(this.areas[this.currentid].style.width,10)-6&&_ca>6){if(this.areas[this.currentid].shape=="circle"){this.is_drawing=this.DM_SQUARE_RESIZE_RIGHT;this.statusMessage(this.strings.SQUARE_RESIZE_RIGHT);}else{if(this.areas[this.currentid].shape=="rect"){this.is_drawing=this.DM_RECTANGLE_RESIZE_RIGHT;this.statusMessage(this.strings.RECTANGLE_RESIZE_RIGHT);}}}else{if(_c9>6&&_ca<6){if(this.areas[this.currentid].shape=="circle"){this.is_drawing=this.DM_SQUARE_RESIZE_TOP;this.statusMessage(this.strings.SQUARE_RESIZE_TOP);}else{if(this.areas[this.currentid].shape=="rect"){this.is_drawing=this.DM_RECTANGLE_RESIZE_TOP;this.statusMessage(this.strings.RECTANGLE_RESIZE_TOP);}}}else{if(_ca>parseInt(this.areas[this.currentid].style.height,10)-6&&_c9>6){if(this.areas[this.currentid].shape=="circle"){this.is_drawing=this.DM_SQUARE_RESIZE_BOTTOM;this.statusMessage(this.strings.SQUARE_RESIZE_BOTTOM);}else{if(this.areas[this.currentid].shape=="rect"){this.is_drawing=this.DM_RECTANGLE_RESIZE_BOTTOM;this.statusMessage(this.strings.RECTANGLE_RESIZE_BOTTOM);}}}else{if(this.areas[this.currentid].shape=="circle"){this.is_drawing=this.DM_SQUARE_MOVE;this.statusMessage(this.strings.SQUARE_MOVE);this.memory[this.currentid].rdownx=_c9;this.memory[this.currentid].rdowny=_ca;}else{if(this.areas[this.currentid].shape=="rect"){this.is_drawing=this.DM_RECTANGLE_MOVE;this.statusMessage(this.strings.RECTANGLE_MOVE);this.memory[this.currentid].rdownx=_c9;this.memory[this.currentid].rdowny=_ca;}else{if(this.areas[this.currentid].shape=="poly"||this.areas[this.currentid].shape=="bezier1"){if(this.areas[this.currentid].xpoints){for(var i=0,le=this.areas[this.currentid].xpoints.length;i<le;i++){this.memory[this.currentid].xpoints[i]=this.areas[this.currentid].xpoints[i];this.memory[this.currentid].ypoints[i]=this.areas[this.currentid].ypoints[i];}}
if(this.areas[this.currentid].shape=="poly"){this.is_drawing=this.DM_POLYGON_MOVE;this.statusMessage(this.strings.POLYGON_MOVE);}else{if(this.areas[this.currentid].shape=="bezier1"){this.is_drawing=this.DM_BEZIER_MOVE;this.statusMessage(this.strings.BEZIER_MOVE);}}
this.memory[this.currentid].rdownx=_c9;this.memory[this.currentid].rdowny=_ca;}}}}}}}
this.memory[this.currentid].width=parseInt(this.areas[this.currentid].style.width,10);this.memory[this.currentid].height=parseInt(this.areas[this.currentid].style.height,10);this.memory[this.currentid].top=parseInt(this.areas[this.currentid].style.top,10);this.memory[this.currentid].left=parseInt(this.areas[this.currentid].style.left,10);this._setBorder(this.currentid,"DRAW");this._setopacity(this.areas[this.currentid],this.config.CL_DRAW_BG,this.config.draw_opacity);}else{this.img_mousemove(e);}};imgmap.prototype.area_mouseup=function(e){if(this.viewmode===1){return;}
if(!this.is_drawing){var obj=(this.isMSIE)?window.event.srcElement:e.currentTarget;if(obj.tagName=="DIV"){obj=obj.parentNode;}
if(obj.tagName=="image"||obj.tagName=="group"||obj.tagName=="shape"||obj.tagName=="stroke"){obj=obj.parentNode.parentNode;}
if(this.areas[this.currentid]!=obj){if(typeof obj.aid=="undefined"){this.log("Cannot identify target area",1);return;}}
this.draggedId=null;}else{this.img_mouseup(e);}};imgmap.prototype.area_mouseover=function(e){if(this.viewmode===1&&this.config.mode!=="highlighter_spawn"){return;}
if(!this.is_drawing){var obj=(this.isMSIE)?window.event.srcElement:e.currentTarget;if(obj.tagName=="DIV"){obj=obj.parentNode;}
if(obj.tagName=="image"||obj.tagName=="group"||obj.tagName=="shape"||obj.tagName=="stroke"){obj=obj.parentNode.parentNode;}
this.highlightArea(obj.aid,"grad");}};imgmap.prototype.area_mouseout=function(e){if(this.viewmode===1&&this.config.mode!=="highlighter_spawn"){return;}
if(!this.is_drawing){var obj=(this.isMSIE)?window.event.srcElement:e.currentTarget;if(obj.tagName=="DIV"){obj=obj.parentNode;}
if(obj.tagName=="image"||obj.tagName=="group"||obj.tagName=="shape"||obj.tagName=="stroke"){obj=obj.parentNode.parentNode;}
this.blurArea(obj.aid,"grad");}};imgmap.prototype.area_dblclick=function(e){if(this.viewmode===1){return;}
if(!this.is_drawing){var obj=(this.isMSIE)?window.event.srcElement:e.currentTarget;if(obj.tagName=="DIV"){obj=obj.parentNode;}
if(obj.tagName=="image"||obj.tagName=="group"||obj.tagName=="shape"||obj.tagName=="stroke"){obj=obj.parentNode.parentNode;}
if(this.areas[this.currentid]!=obj){if(typeof obj.aid=="undefined"){this.log("Cannot identify target area",1);return;}
this.currentid=obj.aid;}
this.fireEvent("onDblClickArea",this.areas[this.currentid]);if(this.isMSIE){window.event.cancelBubble=true;}else{e.stopPropagation();}}};imgmap.prototype.area_mousedown=function(e){if(this.viewmode===1&&this.config.mode!=="highlighter_spawn"){return;}
if(!this.is_drawing){var obj=(this.isMSIE)?window.event.srcElement:e.currentTarget;if(obj.tagName=="DIV"){obj=obj.parentNode;}
if(obj.tagName=="image"||obj.tagName=="group"||obj.tagName=="shape"||obj.tagName=="stroke"){obj=obj.parentNode.parentNode;}
if(this.areas[this.currentid]!=obj){if(typeof obj.aid=="undefined"){this.log("Cannot identify target area",1);return;}
this.currentid=obj.aid;}
this.draggedId=this.currentid;this.selectedId=this.currentid;this.fireEvent("onSelectArea",this.areas[this.currentid]);if(this.isMSIE){window.event.cancelBubble=true;}else{e.stopPropagation();}}else{this.img_mousedown(e);}};imgmap.prototype.doc_keydown=function(e){if(this.viewmode===1){return;}
var key=(this.isMSIE)?event.keyCode:e.keyCode;if(key==46){if(this.selectedId!==null&&!this.is_drawing){this.removeArea(this.selectedId);}}else{if(key==16){if(this.is_drawing==this.DM_RECTANGLE_DRAW){this.is_drawing=this.DM_SQUARE_DRAW;this.statusMessage(this.strings.SQUARE2_DRAW);}}}};imgmap.prototype.doc_keyup=function(e){var key=(this.isMSIE)?event.keyCode:e.keyCode;if(key==16){if(this.is_drawing==this.DM_SQUARE_DRAW&&this.areas[this.currentid].shape=="rect"){this.is_drawing=this.DM_RECTANGLE_DRAW;this.statusMessage(this.strings.RECTANGLE_DRAW);}}};imgmap.prototype.doc_mousedown=function(e){if(this.viewmode===1){return;}
if(!this.is_drawing){this.selectedId=null;}};imgmap.prototype._getPos=function(_dd){var _de=0;var _df=0;if(_dd){var _e0=_dd.offsetParent;if(_e0){while((_e0=_dd.offsetParent)){if(_dd.offsetLeft>0){_de+=_dd.offsetLeft;}
if(_dd.offsetTop>0){_df+=_dd.offsetTop;}
_dd=_e0;}}else{_de=_dd.offsetLeft;_df=_dd.offsetTop;}}
return{x:_de,y:_df};};imgmap.prototype._getLastArea=function(){for(var i=this.areas.length-1;i>=0;i--){if(this.areas[i]){return this.areas[i];}}
return null;};imgmap.prototype.assignCSS=function(obj,_e3){var _e4=_e3.split(";");for(var i=0;i<_e4.length;i++){var p=_e4[i].split(":");var pp=this.trim(p[0]).split("-");var _e8=pp[0];for(var j=1;j<pp.length;j++){_e8+=pp[j].replace(/^\w/,pp[j].substring(0,1).toUpperCase());}
obj.style[this.trim(_e8)]=this.trim(p[1]);}};imgmap.prototype.fireEvent=function(evt,obj){if(typeof this.config.custom_callbacks[evt]=="function"){return this.config.custom_callbacks[evt](obj);}};imgmap.prototype.setAreaSize=function(id,w,h){if(id===null){id=this.currentid;}
if(w!==null){this.areas[id].width=w;this.areas[id].style.width=(w)+"px";this.areas[id].setAttribute("width",w);}
if(h!==null){this.areas[id].height=h;this.areas[id].style.height=(h)+"px";this.areas[id].setAttribute("height",h);}};imgmap.prototype.detectLanguage=function(){var _ef;if(navigator.userLanguage){_ef=navigator.userLanguage.toLowerCase();}else{if(navigator.language){_ef=navigator.language.toLowerCase();}else{return this.config.defaultLang;}}
if(_ef.length>=2){_ef=_ef.substring(0,2);return _ef;}
return this.config.defaultLang;};imgmap.prototype.disableSelection=function(_f0){if(typeof _f0=="undefined"||!_f0){return false;}
if(typeof _f0.onselectstart!="undefined"){_f0.onselectstart=function(){return false;};}
if(typeof _f0.unselectable!="undefined"){_f0.unselectable="on";}
if(typeof _f0.style.MozUserSelect!="undefined"){_f0.style.MozUserSelect="none";}};Function.prototype.bind=function(_f1){var _f2=this;return function(){return _f2.apply(_f1,arguments);};};imgmap.prototype.trim=function(str){return str.replace(/^\s+|\s+$/g,"");};function imgmap_spawnObjects(_f4){var _f5=document.getElementsByTagName("map");var _f6=document.getElementsByTagName("img");var _f7=[];var _f8;for(var i=0,le=_f5.length;i<le;i++){for(var j=0,le2=_f6.length;j<le2;j++){if("#"+_f5[i].name==_f6[j].getAttribute("usemap")){_f4.mode="highlighter_spawn";_f8=new imgmap(_f4);_f8.useImage(_f6[j]);_f8.setMapHTML(_f5[i]);_f8.viewmode=1;_f7.push(_f8);}}}}