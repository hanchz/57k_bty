<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indexx extends CI_Controller {

    public function index()
    {
        $data = array();
        //加载首页幻灯图
        $this->load->model('kv_model');
        $result=$this->kv_model->kv_model();
        $data['kv']=$result;
        //加载首页游戏图片和内容
        $params = array();
        $params['type']=3;
        $params['num']=0;
        $this->load->model('game_model');
        $result=$this->game_model->game_model($params);
        $data['game']=$result;
        //var_dump($data['game']);
        //精品推荐游戏
        //$result=$this->game_model->game_jp_model();
        //$data['game_jp']=$result;
        $params['type']=1;
        $params['num']=4;
        $result=$this->game_model->game_model($params);
        $data['game_jp']=$result;
        //人气推荐游戏
        //$result=$this->game_model->game_rq_model();
        $params['type']=2;
        $params['num']=3;
        $result=$this->game_model->game_model($params);
        $data['game_rq']=$result;
		
		$result1=$this->game_model->gametypelist_model();
		$data['gametypelist']=$result1;
        //$username=$this->getsession();
        //$data['username']=$username;
		
        $this->load->model('gifts_model');
        $this->load->view('index',$data);
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

    public function getsession(){

        //$username=$this->session->userdata('username');

        //echo $username;
        //$validate=$this->session->flashdata('validate');

        //echo        $validate;

    }

    public function logout()
    {
        session_start();
        //$data=array();
        session_destroy (); // 最后彻底销毁session.
        header('Location: http://m.57k.com/');
    }
	


}

