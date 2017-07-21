<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reorder extends CI_Controller {

    public function index()
    {
        $data = array();
        $orderid = $this->input->get('orderid',true);
		echo $result2 = $this->isgamepay($orderid);
        $this->load->view('reorder',$data);

    }

  	public function gamepay($val)
	{
		//根据订单号查询订单信息
		$orderid=$val;
		//$orderid='423364485852466646456842633168170720091836';
        $this->load->model('order_model');
		$result=$this->order_model->order_info_model($orderid); //订单全部信息
		//var_dump($result);
		//exit;
		if(isset($result) && !empty($result)){
		$uid=$result[0]['uid'];
		$serverid=$result[0]['serverid'];
		$gameorderid=$result[0]['gameorderid'];
		$money=$result[0]['money'];
		$goodsid=$result[0]['goodsid'];
		$gameid=$result[0]['gameid'];
		$orderid=$result[0]['orderid'];
		$time=time();
		/*$key="e2SExYMWng9fMVQS";
		$sign=strtolower(md5($uid.$serverid.$time.$gameorderid.$money.$goodsid.$key.$gameid.$orderid));
		$url="http://api.egret-labs.org/v2/pay/22694/91284";*/
		$url="http://m.57k.com/found_gamepay.php";
		//$url="http://localhost/test/found_gamepay.php";
		$str="?uid=".$uid."&serverid=".$serverid."&time=".$time."&gameorderid=".$gameorderid."&money=".$money."&goodsid=".$goodsid."&orderid=".$orderid.'&gameid='.$gameid;
		$url=$url.$str;
		
		//return $url;
		//exit;
		$result = $this->post_url($url);
		return $result;	
		}else{
		return '没有这个订单号';	
			}

	}
	
	
	public function isgamepay($val)
    {
		//echo $val;
		$regamepay = $this->gamepay($val);	
		if($regamepay=='ok'){				
        $params=$val;
        $result=$this->order_model->isgamepay_model($params);
		return $result;
		}else{
		//游戏没给玩家充值成功	
		return 'error';
		}
    }
	
	
	//post
	public function post_url($url)
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




}

