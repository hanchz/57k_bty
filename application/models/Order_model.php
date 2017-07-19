<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Order_Model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->db->query('set names utf8');
        $this->load->driver('cache',array('adapter' => 'redis'));
    }

	//游戏发起支付时，记录订单信息
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

	//拉起支付时候调用，生成我方订单号
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

	//玩家支付成功后，更新订单状态
    public function ispay_model($key)		
    {
        $payorderid = $key;
        $ispay="1";
        $sql = "UPDATE orders SET ispay=?  WHERE orderid= ?";
        $query = $this->db->query($sql, array($ispay, $payorderid));
		if ($query) {
        return "ok";
        } else {
        return "eorror";
        }

    }
	
	//玩家支付成功后，给玩家加游戏币，并更新订单状态
    public function isgamepay_model($key)		
    {
        $payorderid = $key;
        $ispay="2";
        $sql = "UPDATE orders SET ispay=?  WHERE orderid= ?";
        $query = $this->db->query($sql, array($ispay, $payorderid));

    }
	
	//查询订单信息
	public function order_info_model($key)		
    {
		$orderid=$key;
		$sql = "select * from orders where orderid=?";
        $query=$this->db->query($sql,array($orderid));
		//echo $this->db->last_query();
        $result=$query->result_array();
        //var_dump($result);
		return $result;
		
	}
	
	
	public function order_return_test_model($key)		
    {
		$time=date("Y-m-d H:i:s",time());
		$sql="INSERT INTO test (contents,time)VALUES (?,?)";
        $query=$this->db->query($sql,array($key,$time));
		
	}
	


}