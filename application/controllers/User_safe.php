<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_safe extends CI_Controller {

    public function index()
    {
		
        $data = array();

        //$this->load->model('kf_model');
        //$result = $this->kf_model->kf_model();
        //$data['kf']=$result;
        $this->load->view('usersafe',$data);
        //var_dump($data);
    }
	
	public function is_bindphone()
	{
		   $data=array();
		   $uid= $this->input->get('uid',true);;
		   $url="http://www.hs.com/index.php/Apps/is_bindphone?uid=".$uid;
		   //echo $url;
		   //exit;
		   $result=file_get_contents($url);
		   //echo $result;
		   if($result==0){
			   $this->load->view('bindmobile',$data);
			   
		   }else{
			   $data['error']="1";
			   $this->load->view('usersafe',$data);
		   }

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

