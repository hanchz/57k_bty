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

        $this->load->model('gifts_model');

        $this->load->view('gameinfo',$data);
        //var_dump($data);
    }



}

