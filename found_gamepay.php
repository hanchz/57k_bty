<?php

$uid=$_REQUEST['uid'];
$serverid=$_REQUEST['serverid'];
$gameorderid=$_REQUEST['gameorderid'];
$money=$_REQUEST['money'];
$goodsid=$_REQUEST['goodsid'];
$gameid=$_REQUEST['gameid'];
$orderid=$_REQUEST['orderid'];
$time=$_REQUEST['time'];

if($gameid=='91284')
{
		$key="e2SExYMWng9fMVQS";
		$sign=strtolower(md5($uid.$serverid.$time.$gameorderid.$money.$goodsid.$key.$gameid.$orderid));
		$url="http://api.egret-labs.org/v2/pay/22694/91284";
		$str="?uid=".$uid."&serverid=".$serverid."&time=".$time."&orderid=".$gameorderid."&money=".$money."&goodsid=".$goodsid."&order=".$orderid."&sign=".$sign;
		$url=$url.$str;
}
/*echo $url;
exit;*/

		echo $result=post_url($url);	


function post_url($url)
    {
        //初始化
        $ch = curl_init();
        //$url="http://my.57k.com/api/login.php";
        //设置选项，包括URL
        curl_setopt($ch, CURLOPT_URL, "$url");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        //执行并获取HTML文档内容
        $output = curl_exec($ch);
        //释放curl句柄
        curl_close($ch);
        //打印获得的数据
        //print_r($output);
        return $output;
    }
?>