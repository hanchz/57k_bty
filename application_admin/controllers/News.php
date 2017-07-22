<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{

	}

	public function news_list($game_id)
    {
        $params = $this->input->post();
        $data = array();
        $data['game_id'] = $game_id;
        $this->load->view('news_list',$data);
    }

    public function get_news_list($game_id,$news_type=1)
    {
        $params = $this->input->get();
        $limit1 = $params['iDisplayStart'];
        $limit2 = $params['iDisplayLength'];
        $limit = " limit $limit1,$limit2";

        $where = ' 1 = 1 ';
        $where .=' and gameid = '.$game_id;
        $where .=' and newstype = '.$news_type;

        $sql = "
        SELECT
            *
        FROM
            `news`
        WHERE
        $where
        ";
        $query = $this->db->query($sql.$limit);
        $result = $query->result_array();

        $count = $this->db->query($sql)->result_array();
        $count = count($count);

        $return = array();
        $return['aaData'] = $result;
        $return['iTotalDisplayRecords'] = $count;
        $return['iTotalRecords'] = $count;
        echo json_encode($return);exit;
    }

	public function create_news($game_id)
    {
        $data = array();
        $data['game_id'] = $game_id;
        $this->load->view('news_create',$data);
    }

    public function do_create()
    {
        $params = $this->input->post();
        $game_id = $params['game_id'];
        $newstitle = $params['newstitle'];
        $newstype = $params['newstype'];
        $editor = $params['editor'];

        $insert_arr = array(
            'gameid'=>$game_id,
            'newstype'=>$newstype,
            'title'=>$newstitle,
            'content'=>$editor,
            'addtime'=>date('Y-m-d H:i:s',time()),
        );
        $this->db->insert('news',$insert_arr);
        header("location:/admin.php/news/news_list/".$game_id);
    }
}
