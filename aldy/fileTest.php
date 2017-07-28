<?php
    include "TopSdk.php";
    date_default_timezone_set('Asia/Shanghai'); 

    $c = new TopClient;
    //$c->appkey = '12497914';
    //$c->secretKey = '4b0f28396e072d67fae169684613bcd1';
    // $req = new TradeVoucherUploadRequest;
    // $req->setFileName("example");
    // $req->setFileData("@/Users/xt/Downloads/1.jpg");
    // $req->setSellerNick("奥利奥官方旗舰店");
    // $req->setBuyerNick("101NufynDYcbjf2cFQDd62j8M/mjtyz6RoxQ2OL1c0e/Bc=");
    // var_dump($c->execute($req));


$c   =   new   TopClient;  
//$c-> method='alibaba.aliqin.fc.sms.num.send';

 $c->appkey='23541420';     
//$c->appkey='1023541420';			//测试
 $c   ->secretKey =   '81a3f1358ad4b9b9ad3948643ececff0';			
//$c   ->secretKey =  'sandbox58ad4b9b9ad3948643ececff0';				//测试  

$code=$_REQUEST['code'];
$tel=$_REQUEST['tel'];

$req   =   new   AlibabaAliqinFcSmsNumSendRequest;  

 $req   ->setExtend(   ""   );  

 $req   ->setSmsType(   "normal"   );  

 $req   ->setSmsFreeSignName(   "注册验证"   );  

 $req   ->setSmsParam(  "{code:'$code',product:'57k手游'}"  );  

 $req   ->setRecNum(   $tel   );  

 $req   ->setSmsTemplateCode(  "SMS_27555153"  );  

 $resp   =   $c   ->execute(   $req   ); 
//var_dump($c->execute($req));
?>