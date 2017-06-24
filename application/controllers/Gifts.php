<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gifts extends CI_Controller {

    public function index()
    {
        $data = array();
        $this->load->model('gifts_model');
        $result=$this->gifts_model->gifts_model();
        $data['gifts']=$result;
        $this->load->view('gifts',$data);
        //var_dump($data);
    }


    public function check_login()
    {
        $params = array();
        $params = $this->input->get('username',true);
        $this->load->model('user_model');
        $result = $this->user_model->check_user('hanzc','123');
        $result1 = $this->user_model->check_user('hanzc','123');
        $data = array();
        $data['result'] = $result;
        $data['result1'] = $result1;
        $this->load->view('login',$data);
        //var_dump($result);exit;
    }

}

