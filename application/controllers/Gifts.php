<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gifts extends CI_Controller {

    public function index()
    {
        $data = array();
        $this->load->model('gifts_model');
        $result=$this->gifts_model->gifts_model();
        $data['gifts']=$result;

        $this->load->model('kv_model');
        $result=$this->kv_model->kv_model();
        $data['kv']=$result;

        $this->load->view('gifts',$data);
        //var_dump($data);
    }




}

