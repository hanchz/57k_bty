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
        $sign=array();
        $sign = $this->input->get('sign',true);
        $money=array();
        $money = $this->input->get('money',true);
        $goodsid=array();
        $goodsid = $this->input->get('goodsid',true);
        $gameid=array();
        $gameid = $this->input->get('gameid',true);

        /*$uid="1111";
        $serverid="1";
        $time=time();
        $money="1";
        $goodsid="1";
        $gameid="91284";*/
        $key="e2SExYMWng9fMVQS";
        $sign1=strtolower(md5($uid.$serverid.$time.$orderid.$money.$goodsid.$key.$gameid));

		
		if($sign==$sign1){
        $data['orderid']=$orderid;
        $data['uid']=$uid;
        $data['serverid']=$serverid;
        $data['time']=$time;
        $data['sign']=$sign;
        $data['money']=$money;
        $data['goodsid']=$goodsid;
        $data['gameid']=$gameid;
        if(isset($orderid) && !empty($orderid))     //游戏内发起支付，记录订单信息
        {
            $params = array();
            $params=$data;
            $this->load->model('order_model');
            $result=$this->order_model->game_order_model($params);

        }
		}

        $this->load->view('pay',$data);
        //var_dump($data);
    }



}

