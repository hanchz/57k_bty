<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$name="aewr21r1";
$tel="15810586882";
$password="123123";
		//短信验证码接口
			$url='http://www.h5.com/aldy/pwd.php?tel='.$tel.'&name='.$name."&password=".$password;
		echo $url;
		exit;
			$html = file_get_contents($url);
		
		
		$this->load->view('welcome_message');
	}
}
