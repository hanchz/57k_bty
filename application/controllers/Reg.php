<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reg extends CI_Controller {

    public function index()
    {
        $data = array();
        //$this->load->model('Kv_model');
        //$result=$this->Kv_model->kv_model();
        //$data['kv']=$result;
        $this->load->view('reg',$data);
        //var_dump($data);
    }

    public function reg_user()
    {
        $username = array();
        $tel = array();
        $password=array();
        $username = $this->input->post('username',true);
        $tel = $this->input->post('tel',true);
        $password = $this->input->post('password',true);
		if(empty($password)){$password=$this->input->post('password2',true);}
		//echo $password;
		//exit;
        $key = 'hsregister';
        $time=time();
        $sign=md5($username.$password.$time.$key);
        //$url="http://my.57k.com/api/register.php?username=".$username."&tel=".$tel."&pwd=".$password."&sign=".$sign."&time=".$time;
		$url="http://mtg.57k.com/index.php/Apps/index.html?username=".$username."&tel=".$tel."&password=".$password."&sign=".$sign."&time=".$time;
		
        $result = $this->login($url);
        //echo $url;
        //exit;
		if($result>0)
        {
            //header('Location: http://m.57k.com/');
            $_SESSION['username'] = $username;
            $_SESSION['uid'] = $result;
            $data = array();
            $data['username']=$username;
            $data['uid']=$result;
            $this->load->view('login',$data);
			redirect('regok');	
			
            //header('Location: http://m.57k.com/user');
        }else
        {
			if($result==-1){
				echo '<script language="javascript">alert("用户名不合法");</script>';
			}else if($result==-2)
			{
				echo '<script language="javascript">alert("包含不允许注册的词语");</script>';

			}else if($result==-3)
			{
				echo '<script language="javascript">alert("用户名已经存在");</script>';
			}else{echo '<script language="JavaScript">
		alert("注册失败");
		window.location.href="http://m.57k.com/reg";</script>';}

			exit;
            $data = array();
            $error = '1';
            $data['error']=$error;
            $data['errorid']=$result;
            $this->load->view('reg',$data);
			redirect('reg');
            //header('Location: http://m.57k.com/reg/');
        }
    }

    public function login($url)
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

