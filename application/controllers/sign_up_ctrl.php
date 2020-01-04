<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_up_ctrl extends CI_Controller {

	public function index()
	{
        // $this->load->view('home_view');
	}

	// 受け取ったPOST値をバリデーション
	// 表示させる（確認画面移行）

	public function indicate_post() {
		// XSSフィルタを通して、POST値を受け取る
		$post_data = $this->input->post(NULL, TRUE);
		// 確認画面移行
		$this->load->view('sign_up_conf_view',$post_data);
	}



}