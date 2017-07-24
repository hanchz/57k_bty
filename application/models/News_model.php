<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News_Model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->db->query('set names utf8');
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

    public function news_con_model($args)
    {
        $id = $args['id'];
        $sql="select * from news where id=?";
        $query=$this->db->query($sql,array($id));
        //return $sql;
        $result=$query->result_array();
        //var_dump($result);
        //return $result;
        return $query->first_row('array');
    }

    public function game_info($args)
    {
        $id = $args['id'];
        $sql="select * from game_info where id=? and display=1";
        $query=$this->db->query($sql,array($id));
        //return $sql;
        $result=$query->result_array();
        //var_dump($result);
        //return $result;
        return $query->first_row('array');
    }
}