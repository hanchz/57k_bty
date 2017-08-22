<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bind_mobile extends CI_Controller {

    public function index()
    {
        $data = array();

        //$this->load->model('kf_model');
        //$result = $this->kf_model->kf_model();
        //$data['kf']=$result;
        $this->load->view('bindmobile',$data);
        //var_dump($data);
    }
	
	
	public function checkmobile()
	{
			
		   $mobile= $this->input->get('mobile',true);
		   $url="http://www.hs.com/index.php/Apps/checkmobile?mobile=".$mobile;
		   //echo $url;
		   //exit;
		   echo $result=file_get_contents($url);
	}




}

