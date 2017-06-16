<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gifts_Model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->driver('cache',array('adapter' => 'redis'));
    }



    public function gifts_model()
    {
        $date=date("Y-m-d");
         $today=date("Y-m-d", time());
        $sql = "select * from gifts  order by addtime desc limit 0,50";
        $query=$this->db->query($sql,array($today));
        //echo $sql;
        $result=$query->result_array();
        //var_dump($result);
        //$result1_json=json_encode($result1);
        //$result1_json='{"0":'.$result1_json.'}';


        //$result=array_merge($result1,$result2,$result3);
        //var_dump($result);
        //$result='{['.$result1_json.','.$result2_json.'.'.$result3_json.']}';
        //$result='['.$result1_json.']';
        //echo $result;

        return $result;
        //return $query->first_row('array');
    }

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