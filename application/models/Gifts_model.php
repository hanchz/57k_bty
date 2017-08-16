<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gifts_Model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->db->query('set names utf8');
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

    public function gifts_list_model($args)
    {
        $id = $args['id'];
        $sql="select * from gifts_list where giftsid=?";
        $query=$this->db->query($sql,array($id));
        //return $sql;
        $result=$query->result_array();
        //var_dump($result);
        return $result;
        //return $query->first_row('array');
    }

    public function gifts_info_model($args)
    {
        $id = $args['id'];
        $sql="select * from gifts where id=?";
        $query=$this->db->query($sql,array($id));
        //return $sql;
        $result=$query->result_array();
        //var_dump($result);
        return $result;
        //return $query->first_row('array');
    }
	
	public function gifts_num_model($args)
    {
        $id = $args['id'];
        $sql="select count(giftsid) from gifts_list where giftsid=? and ISNULL(userid)";
        $query=$this->db->query($sql,array($id));
        //return $sql;
        $result=$query->result_array();
        //var_dump($result);
        //return $result;
		//var_dump($this->db->last_query());exit;
        return $query->first_row('array');
    }

    public function get_gifts($args)
    {
        $id = $args['id'];
        $uid = $args['uid'];
        $sql="select id from gifts_list where giftsid=? and ISNULL(userid)";
        $query=$this->db->query($sql,array($id));
        //var_dump($this->db->last_query());exit;
        $row = $query->result_array();

        if(count($row)<=0)
        {
            return "已经领完了";
        }

        $sql="select * from gifts_list where giftsid=? and userid=? limit 0,1";
        $query=$this->db->query($sql,array($id,$uid));
        //var_dump($this->db->last_query());exit;
        $row1 = $query->first_row('array');
        if ($row1['id']>0){
            return "您已经领取过了";
        }
        $id = $args['id'];
        $uid = $args['uid'];
        $sql="select * from gifts_list where giftsid=? and ISNULL(userid) limit 0,1";
        $query=$this->db->query($sql,array($id));
        //var_dump($this->db->last_query());exit;
        $row = $query->first_row('array');

        $id=$row['id'];
        $sql="UPDATE gifts_list SET userid=? , gettime=now() WHERE id = ?";
        $query=$this->db->query($sql,array($uid,$id));
        //var_dump($this->db->last_query());exit;

        //return $sql;
        //$result=$query->result_array();
        //var_dump($result);
        //return $result;
        //return $query->first_row('array');
        return $row['key'];
    }
	
	public function gifts_info_model_one($args)
    {
        $id = $args['id'];
        $sql="select * from gifts where id=?";
        $query=$this->db->query($sql,array($id));
        //var_dump($this->db->last_query());exit;
        $row = $query->first_row('array');
		//var_dump($row);
		return $row["giftsinfo"];
    }
	
	public function uesr_gifts_info_model($args)
    {
		$uid = $args['uid'];
		//exit;
        $sql="select * from gifts_list where userid=?";
        $query=$this->db->query($sql,array($uid));
		//var_dump($this->db->last_query());exit;
		$result=$query->result_array();
		return $result;
	}
	
	//通过游戏id找到该游戏的礼包种类
	public function giftsidnum_model($args)
	{
		$gameid=$args['id'];
		$sql="select count(gameid) as num from gifts where gameid=?";
        $query=$this->db->query($sql,array($gameid));
        //return $sql;
        $result=$query->result_array();
        //var_dump($result);
        //return $result;
		//var_dump($this->db->last_query());exit;
        return $query->first_row('array');
	}
	
	
	//通过游戏ID找到礼包的详细信息
	public function gifts_info_gameid_model($args)
    {
        $id = $args['id'];
        $sql="select * from gifts where gameid=?";
        $query=$this->db->query($sql,array($id));
        //return $sql;
        $result=$query->result_array();
        //var_dump($result);
        return $result;
        //return $query->first_row('array');
    }
	
	//通过礼包id找到游戏id
	public function giftsid_gameinfo_model($args)
	{
		$id = $args['id'];
        $sql="select * from gifts where id=?";
        $query=$this->db->query($sql,array($id));
        //return $sql;
        $result=$query->result_array();
        //var_dump($result);
        return $query->first_row('array');
	}

}