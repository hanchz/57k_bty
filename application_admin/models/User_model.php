<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_Model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->db->query('set names utf8');
        $this->load->driver('cache',array('adapter' => 'redis'));
    }

    public function check_user($username,$password)
    {
        //$users_db = $this->load->database('users',true);
        //$sql = 'select * from user where username = ? and password = md5(CONCAT(md5(?),salt))';
        $sql = 'select * from user_info where username = ? and password = ?';
        $query = $this->db->query($sql,array($username,$password));
        $result = $query->result_array();
       // var_dump($result);//exit;
        return $result;
        return $query->first_row('array');
    }
    public function user_info_model($username,$password)
    {
        $sql="select * from user_info where username=? and password=?";
        $query=$this->db->query($sql,array($username,$password));
        $result=$query->result_array();
        //var_dump($result);
        //return $result;
        return $query->first_row('array');
    }
}