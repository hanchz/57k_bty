<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pay extends CI_Controller {

    public function index()
    {
        $data = array();

        $orderid=array();
        $orderid = $this->input->get('orderid',true);
        $uid=array();
        $uid = $this->input->post('uid',true);
        $serverid=array();
        $serverid = $this->input->post('serverid',true);
        $time=array();
        $time = $this->input->post('time',true);
        $sign=array();
        $sign = $this->input->post('sign',true);
        $sign=array();
        $sign = $this->input->post('sign',true);
        $money=array();
        $money = $this->input->post('money',true);
        $goodsid=array();
        $goodsid = $this->input->post('goodsid',true);
        $gameid=array();
        $gameid = $this->input->post('gameid',true);

//        $uid="1";
//        $serverid="1";
//        $time=time();
//        $money="1";
//        $goodsid="1";
//        $gameid="91284";
//        $key="e2SExYMWng9fMVQS";
//        $sign=strtolower(md5($uid.$serverid.$time.$orderid.$money.$goodsid.$key.$gameid));


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


        $this->load->view('pay',$data);
        //var_dump($data);
    }



}

