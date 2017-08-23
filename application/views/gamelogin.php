<?php

//游戏登陆接口文件
function gameurl($gameid,$uid)
{
	//return $gameid;
	if($gameid=='91284')
	{
	$key="e2SExYMWng9fMVQS";
	$url="http://api.egret-labs.org/v2/game/22694/91284";
	}elseif($gameid=='1')
	{
	$key="NvDgEAGoH99CFVPi";
	$url="http://119.23.104.2/app/vs4/";
	}elseif($gameid=='2')
	{
	$key="c8z6J7J5JyOvZQSf";
	$url="http://pulsdk.7724.com/c57k/loginback/game/lmybl";
	}elseif($gameid=='3')
	{
	$key="H9kNJF8vxt1rtJK8";
	$url="http://pulsdk.7724.com/c57k/loginback/game/jpsg";
	}elseif($gameid=='4')
	{
	$key="2cPFgNm4KVpfxKEZ";
	$url="http://api.egret-labs.org/v2/game/22694/90488";
	}elseif($gameid=='5')
	{
	$key="jT6PNgo8Xlq7XbNS";
	$url="http://d.dev.d.hgame.com/hdpt/x57k/appid/101308/gameid/100005";
	}elseif($gameid=='6')
	{
	$key="jT6PNgo8Xlq7XbNS";
	$url="http://d.dev.d.hgame.com/hdpt/x57k/appid/101308/gameid/100005";
	}
	else{$url="";}
	$serverid=1;
	$time=time();
	$sign = strtolower(md5($uid.$serverid.$time.$gameid.$key));
	if($url!=''){
	$url=$url."?uid=".$uid."&serverid=".$serverid."&time=".$time."&gameid=".$gameid."&sign=".$sign;	
	}
	return $url;
	
}
?>