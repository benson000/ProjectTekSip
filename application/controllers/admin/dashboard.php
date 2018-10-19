<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->helper('url');
	}

	function isLoggedIn(){
		return isset($_SESSION['username']) && isset($_SESSION['password']);
	}
	
	function index(){
		if(isLoggedIn()){
			$this->load->view('admin/index');
		}else{
			$this->load->view('admin/login');
		}
	}

	function view_nilai(){
		$data = array('status' => '');

		return $this->load->view('admin/view_nilai', $data);
	}

	function view_data(){
		$data = array('status' => '');

		return $this->load->view('admin/view_data', $data);
	}
}
?>