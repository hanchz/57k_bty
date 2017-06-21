<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newslist extends CI_Controller {

    public function index()
    {
        $data = array();
        //$this->load->model('Kv_model');
        //$result=$this->Kv_model->kv_model();
        //$data['kv']=$result;
        $this->load->model('news_model');
        $result=$this->news_model->news_model();
        $data['news']=$result;
        $this->load->view('newslist',$data);
        //var_dump($data);
    }




}

