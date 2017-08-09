<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_code extends CI_Controller {

    public function index()
    {
        $params = array();
        $params['tel'] = $this->input->get('tel',true);
		$code=rand(1000,9999);
		$params['code']=$code;
        $this->load->model('get_code_model');
        $result=$this->get_code_model->get_code($params);
		//exit;
		if($result)
		{
			//短信验证码接口
			$url='http://m.57k.com/aldy/fileTest.php?tel='.$params['tel'].'&code='.$code;
			$html = file_get_contents($url);

		}
    }
	
	public function reg_code()
	{
		$params = array();
		$tel=$this->input->get('tel',true);
		$telcode=$this->input->get('code',true);
		$params['tel']=$tel;
		$this->load->model('get_code_model');
        $result=$this->get_code_model->reg_code($params);
		//var_dump($result);
		//exit;
		if (isset($result) && !empty($result)) {
			//echo "ok";
			$time=$result['time'];
			$code=$result['code'];
			$time=strtotime($time);
			$now=time();
			if($now-$time>300)
			{
				echo "timeout";
			}else{
				if($telcode==$code){
					echo "ok";
				}else{
					echo "codeerror";
				}
				
			}
		}else{
			echo "error";
		}
	}




}

