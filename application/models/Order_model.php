<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Order_Model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->db->query('set names utf8');
        $this->load->driver('cache',array('adapter' => 'redis'));
    }

    public function game_order_model($data)
    {
        $orderid=$data['orderid'];          //游戏订单号
        $uid=$data['uid'];
        $serverid=$data['serverid'];
        $time=$data['time'];
        $sign=$data['sign'];
        $money=$data['money'];
        $goodsid=$data['goodsid'];
        $gameid=$data['gameid'];
        $ispay="0";
        $datetime=date("Y-m-d H:i:s",time());
        $sql="INSERT INTO orders (gameorderid,uid,gameid,serverid,money,goodsid,ispay,addtime) VALUES (?,?,?,?,?,?,?,?)";
        $query=$this->db->query($sql,array($orderid,$uid,$gameid,$serverid,$money,$goodsid,$ispay,$datetime));
    }

    public function pay_order_model($key)
    {
        $gameorderid = $key["orderid"];
        $payorderid = $key["agent_bill_id"];
        $sql = "UPDATE orders SET orderid=?  WHERE gameorderid= ?";
        $query = $this->db->query($sql, array($payorderid, $gameorderid));
        if ($query) {
        return "ok";
        } else {
        return "eorror";
        }
    }

    public function ispay_model($key)
    {
        $payorderid = $key;
        $ispay="1";
        $sql = "UPDATE orders SET ispay=?  WHERE orderid= ?";
        $query = $this->db->query($sql, array($ispay, $payorderid));

    }


}