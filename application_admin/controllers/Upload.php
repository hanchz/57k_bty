<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Upload extends MY_Controller{

    function __construct() {
        parent::__construct ();
    }

    public function ckeditorUpload()
    {
        $callback = $_REQUEST["CKEditorFuncNum"];
        $time = time();
        $pic = $this->get_pic('upload','news/'.date('Ymd',$time));
        $pic = '/upload/news/'.date('Ymd',$time).'/'.$pic['upload_data']['file_name'];
        echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($callback,'".$pic."','');</script>";
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
        $config['file_name'] = time();

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload($filename);
        $pic = array('upload_data' => $this->upload->data());

        return $pic;
    }
}