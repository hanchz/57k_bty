<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pay extends CI_Controller {

    public function index()
    {
        $data = array();

        $orderid=array();
        $orderid = $this->input->get('orderid',true);
        $uid=array();
        $uid = $this->input->get('uid',true);
        $serverid=array();
        $serverid = $this->input->get('serverid',true);
        $time=array();
        $time = $this->input->get('time',true);
        $sign=array();
        $sign = $this->input->get('sign',true);
        $money=array();
        $money = $this->input->get('money',true);
        $goodsid=array();
        $goodsid = $this->input->get('goodsid',true);
        $goodsname=array();
        $goodsname = $this->input->get('goodsname',true);
        $gameid=array();
        $gameid = $this->input->get('gameid',true);

        /*$uid="1111";
        $serverid="1";
        $time=time();
        $money="1";
        $goodsid="1";
        $gameid="91284";*/
		if($gameid=='91284'){			
        $key="e2SExYMWng9fMVQS";			//三生三世
		}elseif($gameid=='1'){
		$key="NvDgEAGoH99CFVPi";			//大圣伏魔
		}elseif($gameid=='2'){
		$key="c8z6J7J5JyOvZQSf";			//荣耀与远征
		}elseif($gameid=='3'){
		$key="H9kNJF8vxt1rtJK8";			//极品三国
		}elseif($gameid=='4'){
		$key="2cPFgNm4KVpfxKEZ";			//蛮荒纪
		}elseif($gameid=='5'){
		$key="jT6PNgo8Xlq7XbNS";			//蛮荒纪
		}elseif($gameid=='6'){
		$key="jT6PNgo8Xlq7XbNS";			//雨天传奇
		}
        $sign1=strtolower(md5($uid.$serverid.$time.$orderid.$money.$goodsid.$key.$gameid));
//echo $sign;
//echo "<hr>";
//echo $sign1;
		
		if($sign==$sign1){
        $data['orderid']=$orderid;
        $data['uid']=$uid;
        $data['serverid']=$serverid;
        $data['time']=$time;
        $data['sign']=$sign;
        $data['money']=$money;
        $data['goodsid']=$goodsid;
        $data['goodsname']=$goodsname;
        $data['gameid']=$gameid;
        if(isset($orderid) && !empty($orderid))     //游戏内发起支付，记录订单信息
        {
            $params = array();
            $params=$data;
            $this->load->model('order_model');
            $result=$this->order_model->game_order_model($params);

        }
		}
		$this->load->model('game_model');
        $this->load->view('pay',$data);
        //var_dump($data);
    }



}

