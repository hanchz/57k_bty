<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sou extends CI_Controller {

    public function index()
    {
        $data = array();
		
		$this->load->model('kv_model');
        $result=$this->kv_model->kv_model();
        $data['kv']=$result;
		
		$params['gamename'] = $this->input->get('gamename',true);
        $this->load->model('game_model');
        $result=$this->game_model->game_name_info($params);
        $data['gamename']=$result;
        //var_dump($result);
        $this->load->view('sougame',$data);
        //var_dump($data);
    }



}

