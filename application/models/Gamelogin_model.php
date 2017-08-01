<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gamelogin_model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->db->query('set names utf8');
        $this->load->driver('cache',array('adapter' => 'redis'));
    }

    public function gamelogin_model($args)
    {
        $uid = $args['uid'];
        $gameid = $args['gameid'];
		$time=date("Y-m-d H:i:s",time());
        $sql="INSERT INTO user_game (uid,gameid,time) VALUES (?,?,?)";
        $query=$this->db->query($sql,array($uid,$gameid,$time));
        //return $sql;
        //$result=$query->result_array();
        //var_dump($result);
        //return $result;
        //return $query->first_row('array');
    }
	
	public function Usergame_model($args)
	{
		$uid = $args['uid'];
		$sql="select distinct(gameid) from user_game where uid = ? order by time desc limit 0,50";
        $query=$this->db->query($sql,array($uid));
        $result=$query->result_array();
        //var_dump($result);
        return $result;
	}


}