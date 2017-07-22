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

    //接收支付回调通知
    public function notify()
    {
	/*	//记录接收到的所有信息
		$content=file_get_contents('php://input');  //post方式
		$content1=$_SERVER["QUERY_STRING"]."<br>";//获取PHP后的网址参数
		$params=$content."=============".$content1;
        $this->load->model('order_model');
        $this->order_model->order_return_test_model($params);
		*/
		//$content1="result=1&pay_message=&agent_id=1664502&jnet_bill_no=H1707197176391AT&agent_bill_id=4233644858524666464568426356684745773D3D9300&pay_type=30&pay_amt=10.00&remark=&sign=ffb19a996f299c96462c59a491847e27";
		
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

       /* $signStr='';
        $signStr  = $signStr . 'result=' . $result;
        $signStr  = $signStr . '&agent_id=' . $agent_id;
        $signStr  = $signStr . '&jnet_bill_no=' . $jnet_bill_no;
        $signStr  = $signStr . '&agent_bill_id=' . $agent_bill_id;
        $signStr  = $signStr . '&pay_type=' . $pay_type;

        $signStr  = $signStr . '&pay_amt=' . $pay_amt;
        $signStr  = $signStr .  '&remark=' . $remark;

        $signStr = $signStr . '&key=' . '2C53EAF2F317499B9B2D3E10'; //商户签名密钥
		
		

        $sign='';
        $sign=md5($signStr);*/
		$key="4B05A95416DB4184ACEE4313";
		//echo $str='result='.$result.'&agent_id='.$agent_id.'&jnet_bill_no='.$jnet_bill_no.'&agent_bill_id='.$agent_bill_id.'&pay_type='.$pay_type.'&pay_amt='.$pay_amt.'&remark='.$remark.'&key='.$key;
		//echo "<br />";
		echo $sign=md5('result='.$result.'&agent_id='.$agent_id.'&jnet_bill_no='.$jnet_bill_no.'&agent_bill_id='.$agent_bill_id.'&pay_type='.$pay_type.'&pay_amt='.$pay_amt.'&remark='.$remark.'&key='.$key);
		
		echo "<br />";
		echo $return_sign;
        if($sign==$return_sign){   //比较签名密钥结果是否一致，一致则保证了数据的一致性
            echo 'ok';
            //商户自行处理自己的业务逻辑
            ispay($agent_bill_id);              //支付成功，更新订单号
			isgamepay($agent_bill_id);			//支付成功，给玩家加金币
        }
        else{
            echo 'error';
            //商户自行处理，可通过查询接口更新订单状态，也可以通过商户后台自行补发通知，或者反馈运营人工补发
        }
    }

	//更新订单状态，
    public function ispay($val)
    {
        $params=$val;
        $this->load->model('order_model');
        $result=$this->order_model->ispay_model($params);
    }
	
	//给玩家充值，充值成功后，更新订单状态
    public function isgamepay($val)
    {
		$regamepay=gamepay($val);
		if($regamepay=='ok'){				
        $params=$val;
        $result=$this->order_model->isgamepay_model($params);
		}else{
		//游戏没给玩家充值成功	
		}
    }
	
	//游戏充值
	public function gamepay($val)
	{
		//根据订单号查询订单信息
		$orderid=$val;
        $this->load->model('order_model');
		$result=$this->order_model->order_info_model($orderid); //订单全部信息
		$time=time();
		$key="e2SExYMWng9fMVQS";
		$sign=strtolower(md5($result['uid'].$result['serverid'].$time.$result['gameorderid'].$result['money'].$result['goodsid'].$key.$result['gameid'].$result['orderid']));
		$url="http://api.egret-labs.org/v2/pay/22694/91284";
		$str="?uid=".$result['uid']."&serverid=".$result['serverid']."&time=".$time."&orderid=".$result['gameorderid']."&money=".$result['money']."&goodsid=".$result['goodsid']."&order=".$result['orderid']."&sign=".$sign;
		$url=$url.$str;
		$result = $this->post_url($url);	
		////////////////////////返回做判断
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
