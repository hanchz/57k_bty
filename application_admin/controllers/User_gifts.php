<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_gifts extends CI_Controller {

    public function index()
    {
        $data = array();
		
        $this->load->model('gifts_model');

        $this->load->model('kv_model');
        $result=$this->kv_model->kv_model();
        $data['kv']=$result;

        $this->load->view('usergifts',$data);
        //var_dump($data);
    }



}

