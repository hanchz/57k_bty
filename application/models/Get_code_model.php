<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Get_code_Model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->db->query('set names utf8');
        $this->load->driver('cache',array('adapter' => 'redis'));
    }

	
	
	public function get_code($args)
	{
		$tel = $args['tel'];
		$code=$args['code'];
		$time=date("Y-m-d H:i:s", time());
		$sql=" INSERT INTO user_code (tel,code,time)VALUES (?, ?, ?)";
		$query=$this->db->query($sql,array($tel,$code,$time));
		if($query){return true;}else{ return(false);}
	}
	
	public function reg_code($args)
	{
		$tel = $args['tel'];
		//$code=$args['code'];
		//$time=date("Y-m-d H:i:s", time());
		$sql="select * from user_code where tel=? order by time desc limit 0,1";
		$query=$this->db->query($sql,array($tel));
		//if($query){return true;}else{ return(false);}
		 //$row = $query->result_array();
		$row = $query->first_row('array');
		//return $query->first_row('array');
		//var_dump($this->db->last_query());exit;
		return $row;
	}
	


	

}