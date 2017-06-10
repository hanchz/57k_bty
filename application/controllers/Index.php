<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    public function index()
    {
        echo "1";
        //$data = array();
        //$this->load->view('index',$data);
        //var_dump($data);
    }

    //页面跳转
    public function gameinfo()
    {
        $data = array();
        $this->load->view('gameinfo',$data);
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

