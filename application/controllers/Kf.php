<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kf extends CI_Controller {

    public function index()
    {
        $data = array();
        //$this->load->model('Kv_model');
        //$result=$this->Kv_model->kv_model();
        //$data['kv']=$result;
        $this->load->view('kf',$data);
        //var_dump($data);
    }




}

