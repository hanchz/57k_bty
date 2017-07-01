<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_gifts extends CI_Controller {

    public function index()
    {
        $params = array();
        $params['id'] = $this->input->get('id',true);
        $params['uid'] = $this->input->get('uid',true);
        $this->load->model('gifts_model');
        $result=$this->gifts_model->get_gifts($params);
        $data['gifts']=$result;


        $this->load->view('get_gifts',$data);
        //var_dump($data);
    }



}

