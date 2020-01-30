<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_ctrl extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/login_view');
	}

	public function admin()
	{
		$this->load->view('admin/admin_view');
	}

	public function login() {
		$id = $this->input->post('id');
		$pass = $this->input->post('pass');

		if ( $id == 'admin' && $pass =='admin' ) {
			$this->load->view('admin/admin_view');
		} else {
			echo "違う！";
			exit;
		}
	}

	public function load_page_home() {
		$this->load->view('admin/admin_view');
	}

	public function load_page_member() {
		$this->load->view('admin/member_view');
	}
}

