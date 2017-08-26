<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Midifypw extends CI_Controller {

    public function index()
    {
        $data = array();

        //$this->load->model('kf_model');
        //$result = $this->kf_model->kf_model();
        //$data['kf']=$result;
        $this->load->view('midifypw',$data);
        //var_dump($data);
    }

	public function cpw()
    {
		$username=array();
        $oldpw = array();
        $newpw = array();
        $newpw1=array();
        $username = $this->input->post('username',true);
        $oldpw = $this->input->post('oldpw',true);
        $newpw = $this->input->post('newpw',true);
        $newpw1 = $this->input->post('newpw1',true);
        $key = 'hsrepassword';
        $time=time();
        $sign=md5($username.$oldpw.$newpw.$time.$key);
        $url="http://mtg.57k.com/index.php/Apps/changepassword.html?username=".$username."&oldpassword=".$oldpw."&newpwd=".$newpw."&sign=".$sign."&time=".$time;
        $result = $this->login($url);
		//echo $result;
		//exit;
		if($result=='-1')
		{
		$data = array();
		$data['resultcpw']=$result;
		$this->load->view('midifypw',$data);
		}elseif($result=='0')
		{
		$data = array();
		$data['resultcpw']=$result;
		$this->load->view('midifypw',$data);
		}elseif($result=='1')
		{
		$data = array();
		$data['resultcpw']=$result;
		$this->load->view('usersafe',$data);
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

