<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Kf_Model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->db->query('set names utf8');
        $this->load->driver('cache',array('adapter' => 'redis'));
    }



    public function kf_model()
    {
        $date=date("Y-m-d");
         $today=date("Y-m-d", time());
        $sql = "select * from kf where opentime between '$today 00:00:00' and '$today 23:59:59' order by opentime desc";
        $query=$this->db->query($sql,array($today));
        //echo $sql;
        $result1=$query->result_array();
        //var_dump($result);
        $result1_json=json_encode($result1);
        $result1_json='{"0":'.$result1_json.'}';
        //未来一周开服
        $time7=$date." 00:00:00";
        $time7=strtotime($time7) + 8*(3600*24);
        $day7=date("Y-m-d H:i:s",$time7);
        //exit;
        $sql="select * from kf where opentime between '$today 23:59:59' and '$day7 23:59:59' order by opentime desc";
        //echo $sql;
        $query=$this->db->query($sql,array($today,$day7));
        //echo $sql;
        $result2=$query->result_array();
        //var_dump($result);
        $result2_json=json_encode($result2);
        $result2_json='{"1":'.$result2_json.'}';
        //已经开服前7天
        $timef7=$date." 00:00:00";
        $timef7=strtotime($timef7) - 8*(3600*24);
        $dayf7=date("Y-m-d H:i:s",$timef7);
        //exit;
        $sql="select * from kf where opentime between '$dayf7' and '$today 00:00:00' order by opentime desc";
        $query=$this->db->query($sql,array($today,$dayf7));
        //echo $sql;
        $result3=$query->result_array();
        //var_dump($result3);
        $result3_json=json_encode($result3);
        $result3_json='{"2":'.$result3_json.'}';

        //$result=array_merge($result1,$result2,$result3);
        //var_dump($result);
        //$result='{['.$result1_json.','.$result2_json.'.'.$result3_json.']}';
        $result='['.$result1_json.','.$result2_json.','.$result3_json.']';
        //echo $result;

        return $result;
        //return $query->first_row('array');
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