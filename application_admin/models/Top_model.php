<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Top_Model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->db->query('set names utf8');
        $this->load->driver('cache',array('adapter' => 'redis'));
    }

    public function top_model()
    {
        $sql="select * from top10  order by id asc";
        $query=$this->db->query($sql);
        $result=$query->result_array();
        //var_dump($result);
        return $result;
        //return $query->first_row('array');
    }
//    public function game_jp_model()
//    {
//        $sql="select * from game_info where type='1' order by addtime desc limit 0,4";
//        $query=$this->db->query($sql);
//        $result=$query->result_array();
//        //var_dump($result);
//        return $result;
//        //return $query->first_row('array');
//    }
//    public function game_rq_model()
//    {
//        $sql="select * from game_info where type='2' order by addtime desc limit 0,3";
//        $query=$this->db->query($sql);
//        $result=$query->result_array();
//        //var_dump($result);
//        return $result;
//        //return $query->first_row('array');
//    }
    public function game_info($args)
    {
        $id = $args['id'];
        $sql="select * from game_info where id=?";
        $query=$this->db->query($sql,array($id));
        //return $sql;
        $result=$query->result_array();
        //var_dump($result);
        //return $result;
        return $query->first_row('array');
    }

}