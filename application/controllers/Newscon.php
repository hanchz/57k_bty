<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newscon extends CI_Controller {

    public function index()
    {
        $params = array();
        $params['id'] = $this->input->get('id',true);
        $data = array();
        $this->load->model('news_model');
        $result = $this->news_model->news_con_model($params);
        $data['newscon']=$result;
        $this->load->view('newscon',$data);
        //var_dump($data);
    }



}

