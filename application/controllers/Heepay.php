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
        $result = $this->input->get('result',true);
        $pay_message = $this->input->get('pay_message',true);
        $agent_id = $this->input->get('agent_id',true);
        $jnet_bill_no  = $this->input->get('jnet_bill_no',true);
        $agent_bill_id = $this->input->get('agent_bill_id ',true);
        $pay_type = $this->input->get('pay_type ',true);
        $pay_amt = $this->input->get('pay_amt ',true);;
        $remark = $this->input->get('remark ',true);
        $return_sign= $this->input->get('sign ',true);

        $remark = iconv("GB2312","UTF-8//IGNORE",urldecode($remark));//签名验证中的中文采用UTF-8编码;

        $signStr='';
        $signStr  = $signStr . 'result=' . $result;
        $signStr  = $signStr . '&agent_id=' . $agent_id;
        $signStr  = $signStr . '&jnet_bill_no=' . $jnet_bill_no;
        $signStr  = $signStr . '&agent_bill_id=' . $agent_bill_id;
        $signStr  = $signStr . '&pay_type=' . $pay_type;

        $signStr  = $signStr . '&pay_amt=' . $pay_amt;
        $signStr  = $signStr .  '&remark=' . $remark;

        $signStr = $signStr . '&key=' . '2C53EAF2F317499B9B2D3E10'; //商户签名密钥

        $sign='';
        $sign=md5($signStr);
        if($sign==$return_sign){   //比较签名密钥结果是否一致，一致则保证了数据的一致性
            echo 'ok';
            //商户自行处理自己的业务逻辑
            ispay($agent_bill_id);              //支付成功，更新订单号
        }
        else{
            echo 'error';
            //商户自行处理，可通过查询接口更新订单状态，也可以通过商户后台自行补发通知，或者反馈运营人工补发
        }
    }

    public function ispay($val)
    {

        $params=$val;
        $this->load->model('order_model');
        $result=$this->order_model->ispay_model($params);

    }


}

