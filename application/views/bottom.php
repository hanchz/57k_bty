<div class="container-fluid" style=" background:#e7eaf1; position:fixed; bottom:0px; width:100%; margin-top:50px;" >
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:center; margin-top:2px;"><a href="indexx">首页&nbsp;</a>|&nbsp;<span id="app">57k游戏APP</span>&nbsp;|<a href="gifts">&nbsp;礼包</a></div>
    </div>
    <div class="row" style="margin-top:2px;">
        <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999;text-align:center; margin-top:2px;">客服QQ:2453458109</div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999;text-align:center; margin-top:2px;">57k手游网版权所有</div>
    </div>

</div>
<script type="text/javascript">
//判断访问终端   方法
var browser={
    versions:function(){
        var u = navigator.userAgent, app = navigator.appVersion;
        return {
            trident: u.indexOf('Trident') > -1, //IE内核
            presto: u.indexOf('Presto') > -1, //opera内核
            webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
            gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1,//火狐内核
            mobile: !!u.match(/AppleWebKit.*Mobile.*/), //是否为移动终端
            ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
            android: u.indexOf('Android') > -1 || u.indexOf('Adr') > -1, //android终端
            iPhone: u.indexOf('iPhone') > -1 , //是否为iPhone或者QQHD浏览器
            iPad: u.indexOf('iPad') > -1, //是否iPad
            webApp: u.indexOf('Safari') == -1, //是否web应该程序，没有头部与底部
            weixin: u.indexOf('MicroMessenger') > -1, //是否微信 （2015-01-22新增）
            qq: u.match(/\sQQ/i) == " qq" //是否QQ
        };
    }(),
    language:(navigator.browserLanguage || navigator.language).toLowerCase()
}
//使用
//判断是否IE内核
/*if(browser.versions.trident){ alert("is IE"); }
//判断是否webKit内核
if(browser.versions.webKit){ alert("is webKit"); }
//判断是否移动端
if(browser.versions.mobile){ alert("移动端"); }
//判断是否安卓
if(browser.versions.android){ alert("安卓");}	
//判断是否ios
if(browser.versions.ios){ alert("ios")}	*/
if(browser.versions.android){ 
document.getElementById("app").innerHTML='<a href="http://wap.57k.com/">57k游戏APP</a>';
}	
if(browser.versions.ios){ 
document.getElementById("app").innerHTML='<a href="http://le890.com/">57k游戏APP</a>';
}

	var hideKeyboard = function() {
    document.activeElement.blur();
    $("input").blur();
};
</script>