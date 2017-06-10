<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Game_Model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->driver('cache',array('adapter' => 'redis'));
    }

    public function game_model($args)
    {
        $type = $args['type'];
        $num = $args['num'];
        if ($type == 0)
        {
            $sql = "select * from game_info order by addtime desc limit 0,?";
        }elseif($num==0)
        {
            $sql = "select * from game_info order by addtime desc";
        }
        else{
            $sql = "select * from game_info where type=? order by addtime desc limit 0,?";
        }
        $query=$this->db->query($sql,array($type,$num));
        //return $sql;
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