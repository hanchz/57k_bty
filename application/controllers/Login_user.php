<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Controller {

    public function index()
    {
        $data = array();
        $geturl = $this->input->get('geturl',true);
		$data['geturl']=$geturl;
        $this->load->view('login',$data);
        //var_dump($data);
    }

    /**
     * @return object
     */
    public function check_login()
    {
        $username = array();
        $password = array();
        $username = $this->input->post('username',true);
        $password = $this->input->post('password',true);
		//exit;
        $geturl = $this->input->post('geturl',true);
        //var_dump($username);
        //echo $username;
        //var_dump($password);
        $key = 'hslogin';
        $time=time();
        $sign=md5($username.$password.$time.$key);
        $url="http://mtg.57k.com/index.php/Apps/login.html?username=".$username."&password=".$password."&sign=".$sign."&time=".$time;

        //echo $url;
        //exit;

        //初始化
        $ch = curl_init();
        //$url="http://my.57k.com/api/login.php";
        //设置选项，包括URL
        curl_setopt($ch, CURLOPT_URL, "$url");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        //执行并获取HTML文档内容
        $output = curl_exec($ch);
        //释放curl句柄
        curl_close($ch);
        //打印获得的数据
        //print_r($output);
        //exit;
        if($output>0)
        {
            $_SESSION['username'] = $username;
            $_SESSION['uid'] = $output;
            $data = array();
            $data['username']=$username;
            $data['uid']=$output;
            $this->load->view('login',$data);
			
			//redirect('user');
			if($geturl!=''){
			?>
           <script language="javascript">
			   window.location.href="<?php echo $geturl;?>";
			</script>
           <?php
			}else{
				redirect('user');
			}
            //header('Location: http://m.57k.com/user');
                //$this->setsession($username);
            //$this->session->set_userdata('username','zj');
        }else{
        //echo $sign;
            $data = array();
            //$data['login']=$output;

            $error = '1';
            $data['error']=$error;
			$data['geturl']=$geturl;
        $this->load->view('login',$data);
        }
        //var_dump($result);exit;
    }

    public function login($url)
    {
        //初始化
        $ch = curl_init();
        //$url="http://my.57k.com/api/login.php";
        //设置选项，包括URL
        curl_setopt($ch, CURLOPT_URL, "$url");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        //执行并获取HTML文档内容
        $output = curl_exec($ch);
        //释放curl句柄
        curl_close($ch);
        //打印获得的数据
        //print_r($output);
    }

//    public function reg()
//    {
//        $data = array();
//        //$this->load->model('Kv_model');
//        //$result=$this->Kv_model->kv_model();
//        //$data['kv']=$result;
//        $this->load->view('reg',$data);
//    }

    /*public function setsession($username){

        $this->session->set_userdata('username',$username);
    }*/
}

