<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_ctrl extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//event_modelをロード
		$this->load->model('event_model');
	}
	
	public function index()
	{
		//データベースからイベント情報を取得
		$data['event'] = $this->event_model->event_get();
		$this->load->view('home_view', $data);
	}

	public function load_page_cando() {
		$this->load->view('cando_view');
	}

	public function load_page_what_is() {
		$this->load->view('what_is_view');
	}

	public function load_page_event() {
		//データベースからイベント情報を取得
		$data['event'] = $this->event_model->event_get();
		$this->load->view('event_view', $data);
	}

	public function load_page_event_details() {
		// csrfトークンを生成
		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash(),
		);
		
		//イベントidを取得
		$id = $this->input->get('id');
		//受け取ったidを元にデータベースからイベント情報を取得
		$data['event'] = $this->event_model->event_get($id);
		$this->load->view('event_details_view', $data);
	}

	public function load_page_event_reserve() {
		//イベントidを格納している時
		if(isset($_SESSION['event_id'])) {
			//csrfトークンを生成
			$data['csrf'] = array(
				'name' => $this->security->get_csrf_token_name(),
				'hash' => $this->security->get_csrf_hash(),
			);
			$this->load->view('event_reserve_view', $data);
		} else {
			redirect('main_ctrl');
		}
	}

	public function load_page_question() {
		$this->load->view('question_view');
	}

	public function load_page_sign_in() {
		$this->load->view('sign_in_view');
	}

	public function load_page_sign_up() {
		$this->load->view('sign_up_view');
	}

}
