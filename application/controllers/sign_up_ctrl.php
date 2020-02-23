<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_up_ctrl extends CI_Controller {

	public function index()
	{
		$this->load->view('sign_up_view');
	}

	public function conf() {

		$this->load->library('form_validation');

		// XSSフィルタを通して、POST値を受け取る
		$post_data = $this->input->post(NULL, TRUE);

		// POST値をSESSIONに格納する
		$this->session->set_userdata($post_data);

		if ( $this->form_validation->run('sign_up') == FALSE ) {
				// 元の画面に戻る
				$this->load->view('sign_up_view',$post_data);
		} else {
				// 確認画面移行
				$this->load->view('sign_up_conf_view',$post_data);
		}
	}


	public function  complete() {

		//usersモデルとemailライブラリーとCOOKIEヘルパーのロード
		$this->load->model('sign_up_model');
		$this->load->library('email');
		$this->load->helper('cookie');

		// 多重リロード対策
		$csrf_cookie = get_cookie('csrf_cookie');
		if ( $csrf_cookie == '' ) { show_404(); }

		// トークン付きURLの生成
		$url_token = hash('sha256',uniqid(rand(),1));
		$url = "http://www.mixross.com/index.php/sign_up_ctrl/regist"."?urltoken=".$url_token;
		$this->session->set_userdata('url_token',$url_token);

		// 仮テーブルにデータを格納する
		$birthday = $this->sign_up_model->create_birthday();
		$graduate_date = $this->sign_up_model->create_graduate();
		$this->sign_up_model->pre_regist($url_token,$birthday,$graduate_date);

		// 仮登録のメールを送信する
        $this->email->from('marumori.0211@gmail.com', '永井裕大郎');
        $this->email->to( $this->session->userdata('email') );
        $this->email->subject('Email Test');
        $this->email->message('click here '.$url);
		$this->email->send();

		// 仮登録完了画面に遷移
		$this->load->view('sign_up_complete_view');

		// 多重リロード対策
		unset( $_COOKIE['csrf_cookie'] );
		setcookie( 'csrf_cookie', '', time()-3600, '/');
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

	// 独自のバリデーションルール
	// 選択肢が「----」(initial)の場合Falseを返す
	public function _not_hyphen($choice) {

		if ( $choice == "initial" ) {
			$this->form_validation->set_message('_not_hyphen', '選択肢を選択してください。');
			return false;
		} else {
			return true;
		}
	}

	// 独自のバリデーションルール
	// パスワードが一致していない場合Falseを返す
	public function _check_pass($pass) {

        $check_pass = $this->input->post('check_pass');

        if ( $pass == $check_pass) {
            return true;
        } else {
			$this->form_validation->set_message('_check_pass', 'パスワードが一致していません.');
			return false;
		}
	}
}