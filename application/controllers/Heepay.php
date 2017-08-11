<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Heepay extends CI_Controller {

    public function index()
    {
        $data = array();
        $this->load->model('order_model');
        //$result=$this->kv_model->kv_model();
       /* $this->load->model('gifts_model');
        $result=$this->gifts_model->gifts_model();
        $data['gifts']=$result;

        $this->load->model('kv_model');
        $result=$this->kv_model->kv_model();
        $data['kv']=$result;*/
        $data['PAY_URL']=$this->config->config['PAY_URL'];
        $data['QUERY_URL']=$this->config->config['QUERY_URL'];
        $data['AGENT_ID']=$this->config->config['AGENT_ID'];
        $data['SIGN_KEY']=$this->config->config['SIGN_KEY'];
        $this->load->view('heepay',$data);

    }
	
		//post方法
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

    //接收支付回调通知
    public function notify()
    {
	//记录接收到的所有信息
		/*	$content=file_get_contents('php://input');  //post方式
		$content1=$_SERVER["QUERY_STRING"]."<br>";//获取PHP后的网址参数
		$params=$content."=============".$content1;*/
		$params=$_SERVER["QUERY_STRING"];//获取PHP后的网址参数
        $this->load->model('order_model');
        $this->order_model->order_return_test_model($params);
		
	
        $result = $this->input->get('result',true);
        $pay_message = $this->input->get('pay_message',true);
        $agent_id = $this->input->get('agent_id',true);
        $jnet_bill_no  = $this->input->get('jnet_bill_no',true);
        $agent_bill_id = $this->input->get('agent_bill_id',true);
        $pay_type = $this->input->get('pay_type',true);
        $pay_amt = $this->input->get('pay_amt',true);;
        $remark = $this->input->get('remark',true);
        $return_sign= $this->input->get('sign',true);

        $remark = iconv("GB2312","UTF-8//IGNORE",urldecode($remark));//签名验证中的中文采用UTF-8编码;

		$key=$this->config->config['SIGN_KEY'];
		//$key="4B05A95416DB4184ACEE4313";
		$sign=md5('result='.$result.'&agent_id='.$agent_id.'&jnet_bill_no='.$jnet_bill_no.'&agent_bill_id='.$agent_bill_id.'&pay_type='.$pay_type.'&pay_amt='.$pay_amt.'&remark='.$remark.'&key='.$key);
		
		//echo "<br />";
		//echo $return_sign;
        if($sign==$return_sign){   //比较签名密钥结果是否一致，一致则保证了数据的一致性
            //echo 'ok';
            //商户自行处理自己的业务逻辑
            //支付成功，更新订单号
			$result1 = $this->ispay($agent_bill_id);	
			//支付成功，给玩家加金币
			$result2 = $this->isgamepay($agent_bill_id);
			echo $result2;	
        }
        else{
            echo 'error';
            //商户自行处理，可通过查询接口更新订单状态，也可以通过商户后台自行补发通知，或者反馈运营人工补发
			$result1 = $this->payresult($agent_bill_id);		//检验充值是否成功
			
			
        }
    }

	//更新订单状态，更新订单表，把ispay更新成1，已支付状态
    public function ispay($val)
    {
        $params=$val;
        $this->load->model('order_model');
        $result=$this->order_model->ispay_model($params);
    }
	
	//给玩家充值，充值成功后，更新订单状态，把ispay更新成2，给玩家账号充值成功状态
    public function isgamepay($val)
    {
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
	
	//游戏充值
	public function gamepay($val)
	{
		//根据订单号查询订单信息
		$orderid=$val;
		//$orderid='423364485852466646456842633168170720091836';
        $this->load->model('order_model');
		$result=$this->order_model->order_info_model($orderid); //订单全部信息
		//var_dump($result);
		//exit;
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
		//$url="http://m.57k.com/found_gamepay.php";
		//$str="?uid=".$uid."&serverid=".$serverid."&time=".$time."&gameorderid=".$gameorderid."&money=".$money."&goodsid=".$goodsid."&orderid=".$orderid.'&gameid='.$gameid;
		//$url=$url.$str;
		
		
		//exit;
		//$result = $this->post_url($url);
		//return $result;	
		////////////////////////返回做判断
		
		$result=call_user_func(array($this,'gamepay_id_'.$gameid),$gameid,$uid,$serverid,$gameorderid,$money,$goodsid,$orderid,$time);
		return $result;
	}
	
	//充值结果查询   用于充值验证
	public function payresult($agent_bill_id)
	{
		//$agent_bill_id='4233644858524666464568436356744747773D3D3945';
	$url = $this->config->config['QUERY_URL'];
	$version = '1';
	$agent_id = $this->config->config['AGENT_ID'];
	$agent_bill_id = $agent_bill_id;
	$agent_bill_time = date('YmdHis', time());
	$remark = '';
	$return_mode = '1';
	$key = $this->config->config['SIGN_KEY'];;
	
	/*************创建签名***************/
	$sign_str = '';
	$sign_str  = $sign_str . 'version=' . $version;
	$sign_str  = $sign_str . '&agent_id=' . $agent_id;
	$sign_str  = $sign_str . '&agent_bill_id=' . $agent_bill_id;
	$sign_str  = $sign_str . '&agent_bill_time=' . $agent_bill_time;
	$sign_str  = $sign_str . '&return_mode=' . $return_mode;
	$sign_str  = $sign_str . '&key=' . $key;

	//获取签名密钥
	$sign='';
	$sign=md5($sign_str);	
	
	$str="?version=".$version."&agent_id=".$agent_id."&agent_bill_id=".$agent_bill_id."&agent_bill_time=".$agent_bill_time."&remark=".$remark."&return_mode=".$return_mode."&sign=".$sign;
		$url=$url.$str;
		//exit;
		//echo $result = $this->post_url($url);
		$result=file_get_contents($url);
		//echo $result;	agent_id=1664502|agent_bill_id=4233644858524666464568436356744747773D3D3945|jnet_bill_no=H1707208108189AU|pay_type=30|result=1|pay_amt=10.00|pay_message=|remark=|sign=6c69de624d983150f1c257f233a73720
		$arr=explode('|',$result);
		//var_dump($arr);
		//exit;
		foreach($arr as $k=>$v)
		{
			if($v=='result=1'){
			//支付成功，更新订单号
			$result1 = $this->ispay($agent_bill_id);	
			//支付成功，给玩家加金币
			$result2 = $this->isgamepay($agent_bill_id);
			exit;
				}
		} 
		//exit;
	} 
	
	
	

	//三生三世游戏充值接口
	private function gamepay_id_91284($gameid,$uid,$serverid,$gameorderid,$money,$goodsid,$orderid,$time)
	{
		$key="e2SExYMWng9fMVQS";
		$sign=strtolower(md5($uid.$serverid.$time.$gameorderid.$money.$goodsid.$key.$gameid.$orderid));
		$url="http://api.egret-labs.org/v2/pay/22694/91284";
		$str="?uid=".$uid."&serverid=".$serverid."&time=".$time."&orderid=".$gameorderid."&money=".$money."&goodsid=".$goodsid."&order=".$orderid."&sign=".$sign;
		$url=$url.$str;
		$result = $this->post_url($url);
		return $result;
	}
	
	//大圣伏魔游戏充值接口
	private function gamepay_id_1($gameid,$uid,$serverid,$gameorderid,$money,$goodsid,$orderid,$time)
	{
		$key="NvDgEAGoH99CFVPi";
		$sign=strtolower(md5($uid.$serverid.$time.$gameorderid.$money.$goodsid.$key.$gameid.$orderid));
		$url="http://119.23.104.2/app/sdk/k57/pay.php";
		$str="?uid=".$uid."&serverid=".$serverid."&time=".$time."&orderid=".$gameorderid."&money=".$money."&goodsid=".$goodsid."&order=".$orderid."&sign=".$sign;
		$url=$url.$str;
		$result = $this->post_url($url);
		return $result;
	}
	
	//荣耀与远征游戏充值接口
	private function gamepay_id_2($gameid,$uid,$serverid,$gameorderid,$money,$goodsid,$orderid,$time)
	{
		$key="c8z6J7J5JyOvZQSf";
		$sign=strtolower(md5($uid.$serverid.$time.$gameorderid.$money.$goodsid.$key.$gameid.$orderid));
		$url="http://pulsdk.7724.com/c57k/paynotify/game/lmybl";
		$str="?uid=".$uid."&serverid=".$serverid."&time=".$time."&orderid=".$gameorderid."&money=".$money."&goodsid=".$goodsid."&order=".$orderid."&sign=".$sign;
		$url=$url.$str;
		$result = $this->post_url($url);
		return $result;
	}
	
	//极品三国游戏充值接口
	private function gamepay_id_3($gameid,$uid,$serverid,$gameorderid,$money,$goodsid,$orderid,$time)
	{
		$key="H9kNJF8vxt1rtJK8";
		$sign=strtolower(md5($uid.$serverid.$time.$gameorderid.$money.$goodsid.$key.$gameid.$orderid));
		$url="http://pulsdk.7724.com/c57k/paynotify/game/jpsg";
		$str="?uid=".$uid."&serverid=".$serverid."&time=".$time."&orderid=".$gameorderid."&money=".$money."&goodsid=".$goodsid."&order=".$orderid."&sign=".$sign;
		$url=$url.$str;
		$result = $this->post_url($url);
		return $result;
	}
	
	//蛮荒纪游戏充值接口
	private function gamepay_id_4($gameid,$uid,$serverid,$gameorderid,$money,$goodsid,$orderid,$time)
	{
		$key="2cPFgNm4KVpfxKEZ";
		$sign=strtolower(md5($uid.$serverid.$time.$gameorderid.$money.$goodsid.$key.$gameid.$orderid));
		$url="http://api.egret-labs.org/v2/pay/22694/90488";
		$str="?uid=".$uid."&serverid=".$serverid."&time=".$time."&orderid=".$gameorderid."&money=".$money."&goodsid=".$goodsid."&order=".$orderid."&sign=".$sign;
		$url=$url.$str;
		$result = $this->post_url($url);
		return $result;
	}
	
	//传奇世界游戏充值接口
	private function gamepay_id_5($gameid,$uid,$serverid,$gameorderid,$money,$goodsid,$orderid,$time)
	{
		$key="jT6PNgo8Xlq7XbNS";
		$sign=strtolower(md5($uid.$serverid.$time.$gameorderid.$money.$goodsid.$key.$gameid.$orderid));
		$url="http://d.dev.d.hgame.com/pay/x57k/notify";
		$str="?uid=".$uid."&serverid=".$serverid."&time=".$time."&orderid=".$gameorderid."&money=".$money."&goodsid=".$goodsid."&order=".$orderid."&sign=".$sign;
		$url=$url.$str;
		$result = $this->post_url($url);
		return $result;
	}



}

