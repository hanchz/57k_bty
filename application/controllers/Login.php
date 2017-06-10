<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $data = array();
        $data['game_name'] = 'abcc';
        $this->load->model('user_model');
        $result=$this->user_model->user_info_model('hanzc','123');
        $data['username']=$result;
        $this->load->view('index',$data);
        //var_dump($data);
    }

    //页面跳转
    public function gameinfo()
    {
        $data = array();
        $this->load->view('gameinfo',$data);
    }
    public function gifts()
    {
        $data = array();
        $this->load->view('gifts',$data);
    }
    public function kf()
    {
        $data = array();
        $this->load->view('kf',$data);
    }
    public function newslist()
    {
        $data = array();
        $this->load->view('newslist',$data);
    }
    public function reg()
    {
        $data = array();
        $this->load->view('reg',$data);
    }
    public function login_user()
    {
        $data = array();
        $this->load->view('login',$data);
    }
    public function top10()
    {
        $data = array();
        $this->load->view('top10',$data);
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

