<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regok extends CI_Controller {

    public function index()
    {
        $data = array();
        //$this->load->model('Kv_model');
        //$result=$this->Kv_model->kv_model();
        //$data['kv']=$result;
        $this->load->view('regok',$data);
        //var_dump($data);
    }





}

