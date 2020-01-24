<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_up_ctrl extends CI_Controller {

	public function index()
	{
        // $this->load->view('home_view');
	}

	public function conf() {

		// XSSフィルタを通して、POST値を受け取る
		$post_data = $this->input->post(NULL, TRUE);

		// POST値をSESSIONに格納する
		$this->session->set_userdata($post_data);

		// 確認画面移行
		$this->load->view('sign_up_conf_view',$post_data);
	}

	public function  complete() {

		//usersモデルとemailライブラリーのロード
		$this->load->model('sign_up_model');
		$this->load->library('email');

		// トークン付きURLの生成
		$url_token = hash('sha256',uniqid(rand(),1));
		$url = "http://www.mixross.com/index.php/sign_up_ctrl/regist"."?urltoken=".$url_token;
		$this->session->set_userdata('url_token',$url_token);

		// 仮テーブルにデータを格納する
		$birthday = $this->sign_up_model->create_birthday();
		$this->sign_up_model->pre_regist($url_token,$birthday);

		// 仮登録のメールを送信する
        $this->email->from('marumori.0211@gmail.com', '永井裕大郎');
        $this->email->to( $this->session->userdata('email') );
        $this->email->subject('Email Test');
        $this->email->message('click here '.$url);
		$this->email->send();

		// 仮登録完了画面に遷移
		$this->load->view('sign_up_complete_view');
	}

	public function  regist() {

		// urlトークンを入手
		$url_token = $this->input->get('urltoken');

		// 1時間以内のアクセスかどうか調べる
		$this->load->model('sign_up_model');
		$result_date = $this->sign_up_model->check_date($url_token);

		if ( $result_date == true ) {

			// 仮テーブルから本テーブルにデータを移動する
			$this->load->model('sign_up_model');
			$this->sign_up_model->regist($url_token);

			// 本登録完了画面に遷移
			$this->load->view('sign_up_regist_view');

		} else {
			show_404();
		}
	}
}