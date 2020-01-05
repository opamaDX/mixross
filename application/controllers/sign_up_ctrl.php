<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_up_ctrl extends CI_Controller {

	public function index()
	{
        // $this->load->view('home_view');
	}

	public function indicate_post() {
		// バリデーション
		// XSSフィルタを通して、POST値を受け取る
		// CSRF関数も作る
		$post_data = $this->input->post(NULL, TRUE);
		// 確認画面移行
		$this->load->view('sign_up_conf_view',$post_data);
	}

	public function  load_page_complete() {
		// 仮登録確認画面に遷移
		$this->load->view('sign_up_complete_view');
	}



}