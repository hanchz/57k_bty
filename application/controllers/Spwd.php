<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spwd extends CI_Controller {

    public function index()
    {
        $data = array();

        //$this->load->model('kf_model');
        //$result = $this->kf_model->kf_model();
        //$data['kf']=$result;
        $this->load->view('spwd',$data);
        //var_dump($data);
    }




}

