<?php if (!defined('THINK_PATHSLAPP')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0079)http://cmyy.qqwcb.com/index.php/coupons/index?usr=oA9QFjyddSylvKZeQD1ALkWztuYA# -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<title>优惠劵测试</title>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/coupon/common.css" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/coupon/skin.css" />

<script src="<?php echo RES;?>/weixitie/jquery.js" type="text/javascript"></script>

<script>
function g(id){
	return document.getElementById(id);
}
function closeInfo(id){
	g(id).style.display = 'none';
}

function request(paras) {
	var url = location.href;
	var paraString = url.substring(url.indexOf("?") + 1, url.length).split("&");
	var paraObj = {}
	for (i = 0; j = paraString[i]; i++) {
		paraObj[j.substring(0, j.indexOf("=")).toLowerCase()] = j.substring(j.indexOf("=") + 1, j.length);
	}
	var returnValue = paraObj[paras.toLowerCase()];
	if (typeof(returnValue) == "undefined") {
		return "";
	}else {
		return returnValue;
	}
}

function ajaxGet(url,func){
	var XMLHttp=null
	if(window.XMLHttpRequest){
	  	XMLHttp=new XMLHttpRequest()
	}
	else if (window.ActiveXObject){
	  	XMLHttp=new ActiveXObject("Microsoft.XMLHTTP")
	}
	if(!XMLHttp){    
        return alert('create failed');    
    } 
	XMLHttp.onreadystatechange=function(){
		if(XMLHttp.readyState==4){//服务器响应
		  	if(XMLHttp.status==200){//数据正确
			    var resultStr = XMLHttp.responseText;
			    func(resultStr);
	       	}
	    }
	}
	XMLHttp.open("GET",url,true);//true 同步
	XMLHttp.send();
}

function shid(id){
	if(g("content"+id).style.display=="none"){
		g("content"+id).style.display="block";
	}else if(g("content"+id).style.display=="block"){
		g("content"+id).style.display="none";
	}
}

function tiao(id){
	var toPath = "/index.php/coupons/lingqu?id="+id+"&usr="+request("usr")+"";
	//alert(toPath);
	ajaxGet(toPath,function(data){
		var values = eval("("+data+")");
		if(values.info==1){
			//g('sss'+id).style.backgroundColor="#cccccc";
			g('snum'+id).innerHTML="剩"+values.num+"张";
			alert("领取成功");
			//window.location='/index.php/coupons/index?usr='+request("usr");
		}else if(values.info==2){
			//g('sss'+id).style.backgroundColor="#cccccc";
			alert("该优惠卷已领取完了");
		}else if(values.info==3){
			//g('sss'+id).style.backgroundColor="#cccccc";
			alert("时间已过或还未到时间!");
		}else if(values.info==0){
			//g('sss'+id).style.backgroundColor="#cccccc";
			alert("您已参与过这次活动，不能继续领取了");
		}
	});
}
</script>
</head>
<body>
<div id="head_nav" class="head_nav">
    <a href="./优惠劵柴米油盐测试_files/优惠劵柴米油盐测试.htm" class="fl uinfo_show"><b class="icon"></b></a>
    <div class="nav_title_show"><h1 id="logo" class="logo" title="柴米油盐"></h1></div>
    <a href="./优惠劵柴米油盐测试_files/优惠劵柴米油盐测试.htm" class="fr search1"><b class="icon"></b></a>
</div>
<!--<div class="mb-os"> 
    <ul> 
        <li class="on"> 
            <a class="fragment" onclick="sall()">所有的</a> 
        </li> 
        <li> 
            <a class="fragment" onclick="syx()">有效的</a> 
        </li> 
        <li> 
            <a class="fragment" onclick="ssx()">失效的</a>
        </li> 
        <li> 
            <a class="fragment" onclick="syy()">已用的</a> 
        </li> 
    </ul> 
</div>-->
<div style="height:45px;"></div>
<div id="buying_list" style="padding:5px;">
    <div>  
        <ul>
			<li onclick="return cacheSecSave(&#39;1071&#39;,&#39;183467&#39;)">
            <a href="./优惠劵柴米油盐测试_files/优惠劵柴米油盐测试.htm">
            <dl>                  
            <dd>                         
            <img src="./优惠劵柴米油盐测试_files/juan1.jpg" width="120" height="100">                                              
            </dd>                     
            <dt>                      
            <p id="snum8" class="gong">剩4张</p>
            <p>11.00元特大优惠劵发放</p> 
            <p><input type="submit" id="sss8" class="gong1" value="立即领卷" onclick="tiao(8)"></p>                   
            </dt>                 
            </dl>             
            </a>             
            <div class="explain">              
            <span>活动时间：2014-01-01至2014-02-08</span>                 
            <input type="button" value="▼" class="attend_bt" onclick="shid(8)">             
            </div>             
            <div id="content8" class="market" style=" display:none;">
            	<!--<div class="zjxx">
                	<b>中奖信息</b><br/>
                    优惠卷码：<br/>
                    领卷时间：<br />
					使用时间：1388505600 至 1391788800                </div> -->
                <div class="zjxx">
                	<b>领卷规则</b><br>
                    111                   
                </div>           
            </div>         
            </li><li onclick="return cacheSecSave(&#39;1071&#39;,&#39;183467&#39;)">
            <a href="./优惠劵柴米油盐测试_files/优惠劵柴米油盐测试.htm">
            <dl>                  
            <dd>                         
            <img src="./优惠劵柴米油盐测试_files/juan1.jpg" width="120" height="100">                                              
            </dd>                     
            <dt>                      
            <p id="snum5" class="gong">剩10张</p>
            <p>100.00元特大优惠劵发放</p> 
            <p><input type="submit" id="sss5" class="gong1" value="立即领卷" onclick="tiao(5)"></p>                   
            </dt>                 
            </dl>             
            </a>             
            <div class="explain">              
            <span>活动时间：2014-01-01至2014-02-08</span>                 
            <input type="button" value="▼" class="attend_bt" onclick="shid(5)">             
            </div>             
            <div id="content5" class="market" style=" display:none;">
            	<!--<div class="zjxx">
                	<b>中奖信息</b><br/>
                    优惠卷码：<br/>
                    领卷时间：<br />
					使用时间：1388505600 至 1391788800                </div> -->
                <div class="zjxx">
                	<b>领卷规则</b><br>
                    11sadfsadf                   
                </div>           
            </div>         
            </li>        </ul>
	</div>                    
</div>

</body></html>