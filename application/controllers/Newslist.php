<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newslist extends CI_Controller {

    public function index()
    {
        $data = array();
<<<<<<< HEAD
        //$this->load->model('Kv_model');
        //$result=$this->Kv_model->kv_model();
        //$data['kv']=$result;
=======
>>>>>>> 0c5ea3768964886e8cc844ef77a545c9ca89ce1c
        $this->load->model('news_model');
        $result=$this->news_model->news_model();
        $data['news']=$result;
        $this->load->view('newslist',$data);
        //var_dump($data);
    }




}

