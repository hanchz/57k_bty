<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game extends CI_Controller {

    public function index()
    {
        $params = array();
        $params['id'] = $this->input->get('gameid',true);
        $data = array();
        $this->load->model('game_model');
        $result = $this->game_model->game_info($params);
        $data['game']=$result;
        $this->load->view('gameinfo',$data);
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

