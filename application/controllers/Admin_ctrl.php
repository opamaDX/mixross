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

	public function load_page_event_list() {
		// データベースのload
		$this->load->model('event_model');
		//イベント情報の取得
		$data['event'] = $this->event_model->event_get();
		$this->load->view('admin/event_list_view', $data);
	}

	public function load_page_event_edit_confirm() {
		//セッションIDにイベントidを格納している場合
		if($_SESSION['edit_id']) {
			//データベースのロード
			$this->load->model('event_model');
			//編集するイベントの情報取得
			$data['event_edit'] = $this->event_model->event_get($_SESSION['edit_id']);
			//編集確認ページを表示
			$this->load->view('admin/event_edit_confirm_view', $data);
		} else {
			redirect('admin_ctrl/load_page_event_list');
		}
	}

	public function load_page_event_delete_confirm() {
		//セッションに削除するidを格納している場合
		if($_SESSION['delete_id']) {
			//データべ―スのload
			$this->load->model('event_model');
			//削除するイベントの情報の取得
			$data['event_delete'] = $this->event_model->event_get($_SESSION['delete_id']);
			//削除確認ページを表示
			$this->load->view('admin/event_delete_confirm_view', $data);
		} else {
			redirect('admin_ctrl/load_page_event_list');
		}
	}

	public function load_page_event_update() {
		$this->load->view('admin/event_up_view');
	}

	public function load_page_event_up_confirm() {
		//セッションに投稿するイベント情報を格納している場合
		if($_SESSION['event_hold']) {
			$this->load->view('admin/event_up_confirm_view');
		} else {
			redirect('admin_ctrl/load_page_event_update');
		}
	}
}

