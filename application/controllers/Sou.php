<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sou extends CI_Controller {

    public function index()
    {
        $data = array();
		
		$this->load->model('kv_model');
        $result=$this->kv_model->kv_model();
        $data['kv']=$result;
		
		$params=array();
		$params['gamename'] = $this->input->get('gamename',true);
		
		$params['gametype'] = $this->input->get('gametype',true);
		
		$a=$this->input->get('gamename',true);
		$b=$this->input->get('gametype',true);
		
		
		
        $this->load->model('game_model');
        $this->load->model('gifts_model');
        $result=$this->game_model->game_name_info($params);
		$result1=$this->game_model->game_type_info($params);
		if($a){
			$data['gamename']=$result;
			$this->load->view('sougame',$data);
		}else{
			$data['gametypeinfo']=$result1;
			$this->load->view('sougametype',$data);
		}
		
        //$data['gamename']=$result;
		//$data['gametypeinfo']=$result1;
		
        //var_dump($result);
        //$this->load->view('sougame',$data);
        //var_dump($data);
    }



}

