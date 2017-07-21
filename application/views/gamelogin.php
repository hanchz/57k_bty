<?php

//游戏登陆接口文件
function gameurl($gameid,$uid)
{
	//return $gameid;
	if($gameid=='91284')
	{
	$serverid=1;
	$time=time();
	$key="e2SExYMWng9fMVQS";
	$sign = strtolower(md5($uid.$serverid.$time.$gameid.$key));
	$url="http://api.egret-labs.org/v2/game/22694/91284";
	$url=$url."?uid=".$uid."&serverid=".$serverid."&time=".$time."&gameid=".$gameid."&sign=".$sign;	
	
	}elseif($gameid=='1')
	{
	$serverid=1;
	$time=time();
	$key="NvDgEAGoH99CFVPi";
	$sign = strtolower(md5($uid.$serverid.$time.$gameid.$key));
	$url="http://119.23.104.2/app/vs4/";
	$url=$url."?uid=".$uid."&serverid=".$serverid."&time=".$time."&gameid=".$gameid."&sign=".$sign;	
	
	}else{$url="";}
	
	return $url;
	
}
?>