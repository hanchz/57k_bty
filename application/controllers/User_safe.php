<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_safe extends CI_Controller {

    public function index()
    {
		
        $data = array();

        
        $this->load->view('usersafe',$data);
        //var_dump($data);
    }
	
	
	//检查用户名是否绑定了手机号接口
	public function is_bindphone()
	{
		   $data=array();
		   $username= $this->input->get('username',true);;
		   $url="http://mtg.57k.com/index.php/Apps/is_bindphone.html?username=".$username;
		   //echo $url;
		   //exit;
		   $result=file_get_contents($url);
		   //echo $result;
		 //exit;  
		if($result==0){
			   $this->load->view('bindmobile',$data);
			   
		   }else{
			   $data['error']="1";
			   $this->load->view('usersafe',$data);
		   }

	}
	
	
	//检查手机号是否被注册接口
	public function checkmobile()
	{
			
		   $mobile= $this->input->get('mobile',true);
		   $url="http://mtg.57k.com/index.php/Apps/checkmobile?mobile=".$mobile;
		   //echo $url;
		   //exit;
		    $result_zj=file_get_contents($url);
		echo substr($result_zj,0,1);
	}

	
	
	
	
	//进行绑定手机号，绑定手机号接口
	public function bindmobile()
	{
		$username=$this->input->get('username',true);
		$mobile=$this->input->get('mobile',true);
		
		//加密
		$key="1qyRSrcCrRngC98d";
		$sign=md5($username.$mobile.$key);
		
		$url="http://mtg.57k.com/index.php/Apps/bindphone.html?username=".$username."&mobile=".$mobile."&sign=".$sign;
		$res=file_get_contents($url);
		$res=substr($res,0,1);
		echo $res;
	}
	
	

	public 	function post_url($url)
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
    }

}

