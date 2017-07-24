<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Gamelogin extends CI_Controller {

    public function index($gameid)
    {
        $data = array();
		$uid=$_SESSION['uid'];
		//echo "<br />";
		//echo $gameid;
        //$gameid = $this->input->get('gameid',true);
		//var_dump($gameid);exit;
		$params = array();
		$params['uid']=$uid;
		$params['gameid']=$gameid;
		$this->load->model('gamelogin_model');
        $result=$this->gamelogin_model->gamelogin_model($params);
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
	}
	else
	{
	$url="";
	}
    $serverid=1;
	$time=time();
	$sign = strtolower(md5($uid.$serverid.$time.$gameid.$key));
	if($url!=''){
	$url=$url."?uid=".$uid."&serverid=".$serverid."&time=".$time."&gameid=".$gameid."&sign=".$sign;	
	}
	   
	   
	   
echo '<script language="javascript">window.location.href="'.$url.'";</script>';
    }




}

