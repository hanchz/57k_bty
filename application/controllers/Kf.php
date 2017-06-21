<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kf extends CI_Controller {

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
        $this->load->model('kf_model');
        $result = $this->kf_model->kf_model();
        $data['kf']=$result;
        $this->load->view('kf',$data);
        //var_dump($data);
    }




}

