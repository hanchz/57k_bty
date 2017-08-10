<?php


function is_weixin(){ 

if ( strpos($_SERVER['HTTP_USER_AGENT'], 

'MicroMessenger') !== false ) {

        return true;

    }  

        return false;

}

//获取用户IP
$user_ip = "";
if(isset($_SERVER['HTTP_CLIENT_IP']))
{
    $user_ip = $_SERVER['HTTP_CLIENT_IP'];
}
else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
{
    $user_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}else
{
    $user_ip = $_SERVER['REMOTE_ADDR'];
}

//$user_ip="114.240.93.228";

$gameid = $_POST['gameid'];    //游戏id
$uid=$_POST['uid'];

include ('gamelogin.php');
$return_url=gameurl($gameid,$uid);//支付成功后，跳转回游戏地址


//$return_url='http://m.57k.com/gamelogin/index/'.$gameid;

$version = 1;
$agent_id = $AGENT_ID;
$orderid=$_POST['orderid'];

$agent_bill_id = substr($_POST['orderid'],0,30).date("ymdHis");
$agent_bill_time = date('YmdHis', time());
$pay_type = 30; //微信支付代码,int型
$pay_code = ""; //char型，空字符串
$pay_amt = $_POST['money'];
$notify_url = "http://m.57k.com/Heepay/notify";
$return_url = $return_url; //微信支付不涉及同步返回，此处可填写任意URL，没有实际使用
$goods_name = $_POST['goodsname'];
$goods_num = "1";
$goods_note = $_POST['goodsname'];
if($_POST["goodsid"]==""){
	$goods_name='游戏道具';
	$goods_note='游戏道具';
}
if($goods_name==''){$goods_name='游戏道具'; $goods_note='游戏道具';}
$remark = "";
$sign_key = "$SIGN_KEY"; //签名密钥，需要商户使用为自己的真实KEY

if(is_weixin()){

$wxpay_type=2;

}else{

$wxpay_type=1;

}

//微信支付类型（扫码支付、WAP支付、公众号支付）
if($wxpay_type == 1) //WAP支付
{
    $is_phone = 1;
    $is_frame = 0;
}
else if($wxpay_type == 2) //公众号支付
{
    $is_phone = 1;
    $is_frame = 1;
}
//$meta_option="s:WAP,n:57k手游站,id:http://m.57k.com/";
$meta_option="{'s':'WAP','n':'57k手游站','id':':http://m.57k.com/'}";
$meta_option=iconv("UTF-8","gb2312",$meta_option);
$meta_option=base64_encode($meta_option);

/*************创建签名***************/
$sign_str = '';
$sign_str  = $sign_str . 'version=' . $version;
$sign_str  = $sign_str . '&agent_id=' . $agent_id;
$sign_str  = $sign_str . '&agent_bill_id=' . $agent_bill_id;
$sign_str  = $sign_str . '&agent_bill_time=' . $agent_bill_time;
$sign_str  = $sign_str . '&pay_type=' . $pay_type;
$sign_str  = $sign_str . '&pay_amt=' . $pay_amt;
$sign_str  = $sign_str . '&notify_url=' . $notify_url;   //htmlspecialchars("&not")
$sign_str  = $sign_str . '&return_url=' . $return_url;
$sign_str  = $sign_str . '&user_ip=' . $user_ip;
//$sign_str  = $sign_str . '&is_test=1';
$sign_str = $sign_str . '&key=' . $sign_key;

$sign = md5($sign_str); //签名值

$params = array();
$params['agent_bill_id'] = $agent_bill_id;
$params['orderid']=$orderid;
$this->load->model('order_model');
$result=$this->order_model->pay_order_model($params);


?>
<!--<textarea name="card_data" id="card_data" rows="10" cols="70"><?php echo '签名原始数据：'.strtolower($sign_str);?></textarea>
<textarea name="sign" id="sign" rows="10" cols="70"><?php echo '签名加密后数据数据：'.$sign;?></textarea>
-->
<form id='frmSubmit' method='post' name='frmSubmit' action='<?php echo $PAY_URL?>'>
    <input type='hidden' name='version' value='<?php echo $version;?>'  id="version"/>
    <input type='hidden' name='agent_id' value='<?php echo $agent_id;?>' id="agent_id"/>
    <input type='hidden' name='agent_bill_id' value='<?php echo $agent_bill_id;?>' id="agent_bill_id"/>
    <input type='hidden' name='agent_bill_time' value='<?php echo  $agent_bill_time;?>' id="agent_bill_time" />
    <input type='hidden' name='pay_type' value='<?php echo $pay_type;?>' id="pay_type" />
    <input type='hidden' name='pay_code' value='<?php echo $pay_code;?>' id="pay_code"/>
    <input type='hidden' name='pay_amt' value='<?php echo $pay_amt;?>' id="pay_amt" />
    <input type='hidden' name='notify_url' value='<?php echo $notify_url;?>' id="notify_url"/>
    <input type='hidden' name='return_url' value='<?php echo $return_url;?>' id="return_url" />
    <input type='hidden' name='user_ip' value='<?php echo $user_ip;?>' id="user_ip" />
    <input type='hidden' name='goods_name' value='<?php echo urlencode($goods_name);?>' id="goods_name" />
    <input type='hidden' name='goods_num' value='<?php echo  urlencode($goods_num);?>'  id="goods_num"/>
    <input type='hidden' name='goods_note' value='<?php echo urlencode($goods_note);?>' id="goods_note" />
    <input type='hidden' name='remark' value='<?php echo urlencode($remark);?>' id="remark" />
    <input type='hidden' name='is_phone' value='<?php echo $is_phone;?>' id="is_phone" />
    <input type='hidden' name='is_frame' value='<?php echo $is_frame;?>' id="is_frame" />
    
    <input type="hidden" name="meta_option" value="<?php echo $meta_option?>" id="meta_option" />
    
    <!--<input type='hidden' name='is_test' value='1' />-->
    <input type='hidden' name='sign' value='<?php echo $sign;?>'  id="sign1"/>
    <input type="button" value="" onclick="gatewayPaySubmit()">
</form>

<p id="demo"></p>
<script language='javascript'>
	var version=document.getElementById("version").value;
			var agent_id=document.getElementById("agent_id").value;
			var agent_bill_id=document.getElementById("agent_bill_id").value;
			var agent_bill_time=document.getElementById("agent_bill_time").value;
			var pay_type=document.getElementById("pay_type").value;
			var pay_code=document.getElementById("pay_code").value;
			var pay_amt=document.getElementById("pay_amt").value;
			var notify_url=document.getElementById("notify_url").value;
			var return_url=document.getElementById("return_url").value;
			var user_ip=document.getElementById("user_ip").value;
			var goods_name=document.getElementById("goods_name").value;
			var goods_num=document.getElementById("goods_num").value;
			var goods_note=document.getElementById("goods_note").value;
			var remark=document.getElementById("remark").value;
			var is_phone=document.getElementById("is_phone").value;
			var is_frame=document.getElementById("is_frame").value;
			var meta_option=document.getElementById("meta_option").value;
			var sign1=document.getElementById("sign1").value;
			
			///var not=htmlspecialchars('&not');
			
			var str='version='+version+'&agent_id='+agent_id+'&agent_bill_id='+agent_bill_id+'&agent_bill_time='+agent_bill_time+'&pay_type='+pay_type+'&pay_code='+pay_code+'&pay_amt='+pay_amt+'&notify_url='+notify_url+'&return_url='+return_url+'&user_ip='+user_ip+'&goods_name='+goods_name+'&goods_num='+goods_num+'&goods_note='+goods_note+'&remark='+remark+'&is_phone='+is_phone+'&is_frame='+is_frame+'&meta_option='+meta_option+'&sign='+sign1;
			//alert(id);
			//document.getElementById("demo").innerHTML=str;
    function gatewayPaySubmit(){
			document.frmSubmit.submit();
			
			}
</script>
<?php
if($result=="ok")
{
    echo '<script language="javascript">gatewayPaySubmit();</script>';
}
?>