<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News_Model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->driver('cache',array('adapter' => 'redis'));
    }

    public function news_model()
    {
        $sql="select * from news order by addtime desc limit 0,50";
        $query=$this->db->query($sql);
        $result=$query->result_array();
        //var_dump($result);
        return $result;
        //return $query->first_row('array');
    }
}