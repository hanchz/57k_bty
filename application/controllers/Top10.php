<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Top10 extends CI_Controller {

    public function index()
    {
        $data = array();
<<<<<<< HEAD
        //$this->load->model('Kv_model');
        //$result=$this->Kv_model->kv_model();
        //$data['kv']=$result;
<<<<<<< HEAD
=======
=======
>>>>>>> 0c5ea3768964886e8cc844ef77a545c9ca89ce1c
>>>>>>> fadb9f797bade8e95edfbbe15cc80ec609c4a592
        $this->load->model('top_model');
        $result=$this->top_model->top_model();
        $data['top']=$result;
        $this->load->view('top10',$data);
        //var_dump($data);
    }




}

