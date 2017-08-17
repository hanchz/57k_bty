<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usergame extends CI_Controller {

    public function index()
    {
        $data = array();
        $this->load->model('top_model');
        $result=$this->top_model->top_model();
        $data['top']=$result;

        $this->load->model('kv_model');
        $result=$this->kv_model->kv_model();
        $data['kv']=$result;
		
		//$params = array();
		//$params['uid']=$_SESSION['uid'];
		//$this->load->model('Gamelogin_model');
        //$result=$this->Gamelogin_model->Usergame_model($params);
        //$data['usergame']=$result;
		
		$this->load->model('Gamelogin_model');
		$this->load->model('Game_model');
        $this->load->model('gifts_model');
		
        $this->load->view('usergame',$data);
        //var_dump($data);
    }






}

