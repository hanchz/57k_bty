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
       
echo '<script language="javascript">window.location.href="'.$url.'";</script>';
    }




}

