<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Games extends MY_Controller{

    function __construct() {
        parent::__construct ();
    }

    public function index()
    {
        $this->load->view('games');
    }

    public function create()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->view('games_create');
    }

    public function edit($id=1)
    {
        $sql = '
        select
        *
        from
        game_info
        WHERE 
        id = ?
        ';
        $game_info = $this->db->query($sql,array($id))->first_row('array');

        $this->load->view('games_edit',$game_info);
    }

    public function do_create()
    {
        $params = $this->input->post();
        $logo = $gamepic = $lb1 = $lb2 = $lb3 = $lb4 = $lb = array();

        $name = $params['gamename'];
        $gametype = $params['gametype'];
        $size = $params['gamesize'];
        $downnum = $params['downnum'];
        $type = $params['tj'];
        $about = $params['about'];
        $url = $params['url'];

        $insert_arr = array(
            'name' => $name,
            'gametype' => $gametype,
            'size' => $size,
            'downnum' => $downnum,
            'type' => $type,
            'about' => $about,
            'url' => $url,
            'addtime' => date('Y-m-d H:i:s',time()),
        );
        $this->db->insert('game_info', $insert_arr);
        $gameid = $this->db->insert_id();

        foreach($_FILES as $key => $f)
        {
            if($f['size']>0)
            {
                $$key = $this->get_pic($key,$gameid);
            }
        }

        $logo = '/upload/'.$gameid.'/'.$logo['upload_data']['file_name'];

        for($i=1;$i<=4;$i++)
        {
            $tempname = 'lb'.$i;
            if(isset($$tempname) && !empty($$tempname))
            {
                $tname = $$tempname;
                $lb[] = '/upload/'.$gameid.'/'.$tname['upload_data']['file_name'];
            }
        }

        $pic = json_encode($lb);

        $update_arr = array(
            'logo' => $logo,
            'pic' => $pic,
        );

        $this ->db->update('game_info',$update_arr,array('id'=>$gameid));

        header('location: /admin.php/games/');

    }

    public function do_edit($game_id)
    {
        $params = $this->input->post();
        $logo = $gamepic = $lb1 = $lb2 = $lb3 = $lb4 = $lb = array();

        $name = $params['gamename'];
        $gametype = $params['gametype'];
        $size = $params['gamesize'];
        $downnum = $params['downnum'];
        $type = $params['tj'];
        $about = $params['about'];
        $url = $params['url'];

        $update_arr = array(
            'name' => $name,
            'gametype' => $gametype,
            'size' => $size,
            'downnum' => $downnum,
            'type' => $type,
            'about' => $about,
            'url' => $url,
        );

        $this->db->update('game_info',$update_arr,array('id'=>$game_id));

        foreach($_FILES as $key => $f)
        {
            if($f['size']>0)
            {
                $$key = $this->get_pic($key,$game_id);
            }
        }

        $update_arr = array();

        if(!empty($logo))
        {
            $logo = '/upload/'.$game_id.'/'.$logo['upload_data']['file_name'];
            $update_arr['logo'] = $logo;
        }

        for($i=1;$i<=4;$i++)
        {
            $tempname = 'lb'.$i;
            if(isset($$tempname) && !empty($$tempname))
            {
                $tname = $$tempname;
                $lb[] = '/upload/'.$game_id.'/'.$tname['upload_data']['file_name'];
            }
        }

        if(!empty($lb))
        {
            $pic = json_encode($lb);

            $update_arr['pic'] = $pic;
        }

        if(!empty($update_arr))
        {
            $this ->db->update('game_info',$update_arr,array('id'=>$gameid));
        }

        header('location: /admin.php/games/');

    }

    public function get_list()
    {
        $params = $this->input->get();
        $limit1 = $params['iDisplayStart'];
        $limit2 = $params['iDisplayLength'];
        $limit = " limit $limit1,$limit2";

        $where = ' 1 = 1 ';

        $sql = "
        SELECT
            *
        FROM
            `game_info`
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

    public function gift_list($game_id)
    {
        $data = array();
        $data['game_id'] = $game_id;
        $this->load->view('gift_list',$data);
    }

    public function get_gift_list($game_id)
    {
        $params = $this->input->get();
        $limit1 = $params['iDisplayStart'];
        $limit2 = $params['iDisplayLength'];
        $limit = " limit $limit1,$limit2";

        $where = ' 1 = 1 ';

        $sql = "select * from gifts where gameid = $game_id ";
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

    public function gift_create($game_id)
    {
        if(is_null($game_id))
        {
            echo 'gameid_error';exit;
        }

        $data = array();
        $data['game_id'] = $game_id;

        $this->load->view('gift_create',$data);

    }

    public function gift_do_create()
    {
        $params = $this->input->post();
        $game_id = $params['game_id'];
        $giftname = $params['giftname'];
        $giftinfo = $params['giftinfo'];
        $giftkey = $params['giftkey'];

        $giftkey = explode("\r\n",$giftkey);

        $select = 'select * from gifts where gameid = ? and giftsname = ?';
        $selquery = $this->db->query($select,array($game_id,$giftname));
        $result = $selquery->result_array();
        if(!empty($result))
        {
            echo '<script>alert("礼包名称重复");history.go(-1);</script>';exit;
        }
        if(empty($params['giftkey']))
        {
            echo '<script>alert("礼包码不能为空");history.go(-1);</script>';exit;
        }

        $sql = "insert into gifts set giftsname=? , giftsinfo = ? , addtime = ? ,gameid = ?";
        $query = $this->db->query($sql,array($giftname,$giftinfo,date('Y-m-d H:i:s'),$game_id));
        $giftid = $this->db->insert_id();

        if($giftid > 0)
        {
            $gkl = array();
            foreach($giftkey as $key => $gk)
            {
                $gkl[] = array(
                    'giftsid'=>$giftid,
                    'key' => $gk,
                );
            }

            $this->db->insert_batch('gifts_list',$gkl);
        }

        header('location: /admin.php/games/gift_list/'.$game_id);
    }

    public function gift_edit($gift_id)
    {
        $sql = 'select * from gifts where id = ?';
        $query = $this->db->query($sql,array($gift_id));
        $result = $query->first_row('array');

        $data = $result;

        $this->load->view('gift_edit',$data);
    }

    public function gift_do_edit()
    {
        $params = $this->input->post();
        $id = $params['id'];
        $giftname = $params['giftname'];
        $giftinfo = $params['giftinfo'];
        $giftkey = $params['giftkey'];

        $giftkey = explode("\r\n",$giftkey);

        $sql = 'select * from gifts where id = ?';
        $query = $this->db->query($sql,array($id));
        $resultsql = $query->first_row('array');

        $select = 'select * from gifts where id!= ? and giftsname = ?';
        $selquery = $this->db->query($select,array($id,$giftname));
        $result = $selquery->result_array();


        if(!empty($result))
        {
            echo '<script>alert("礼包名称重复");history.go(-1);</script>';exit;
        }
//        if(empty($params['giftkey']))
//        {
//            echo '<script>alert("礼包码不能为空");history.go(-1);</script>';exit;
//        }

        $update_arr = array(
            'giftsname' => $giftname,
            'giftsinfo' => $giftinfo,
        );

        $update = $this->db->update('gifts',$update_arr,array('id'=>$id));

        if($update)
        {
            if(!empty($params['giftkey']))
            {
                $gkl = array();
                foreach($giftkey as $key => $gk)
                {
                    $gkl[] = array(
                        'giftsid'=>$id,
                        'key' => $gk,
                    );
                }
                $this->db->insert_batch('gifts_list',$gkl);
            }
        }

        header('location: /admin.php/games/gift_list/'.$resultsql['gameid']);
    }

    private function get_pic($filename,$id='temp')
    {

        if (!is_dir('./upload/'.$id.'/'))
        {
            mkdir('./upload/' . $id . '/', 0777, true);
        }
        $config['upload_path']      = './upload/'.$id.'/';
        $config['allowed_types']    = 'gif|jpg|png|jepg';
        $config['max_size']     = 100000;
        $config['file_name'] = $filename;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload($filename);
        $pic = array('upload_data' => $this->upload->data());

        return $pic;
    }


}
