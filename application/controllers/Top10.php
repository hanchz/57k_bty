<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Top10 extends CI_Controller {

    public function index()
    {
        $data = array();
        $this->load->model('top_model');
        $result=$this->top_model->top_model();
        $data['top']=$result;
        $this->load->view('top10',$data);
        //var_dump($data);
    }




}

