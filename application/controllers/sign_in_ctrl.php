<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_in_ctrl extends CI_Controller
{   
    public function __construct()
    {
        parent::__construct();
        //セッションIDの追跡を防ぐ
        session_regenerate_id(true);
    }
    
    public function login()
    {   
        //csrfトークン判定
        if($this->input->method(true) !== 'POST') {
            show_404();
        }
        
        //変数の初期化
        $err_message = array();
        
        //login_btnが押された時
        if($this->input->post('login_btn')) {
            
            //XSSフィルタでemailとpasswordを受け取る
            $email    = $this->input->post('email', true);
            // パスワードはハッシュ化させておく
            $password = $this->input->post('password', true); 

            //emailとpasswordのバリテーション
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $err_message["mail"] = true;
            }
            if(!preg_match('/\A[a-z\d]{1,100}+\z/i', $password)) {
                $err_message["password"] = true;
            }
            
            //エラーメッセージが空の場合
            if(!$err_message) {
                //データベースのロード
                $this->load->model('sign_in_model');
                $sign_in = $this->sign_in_model->sign_in($email, $password);
                // emailとpasswordがあっている場合
                if($sign_in === true) {
                    $_SESSION['user_email'] = $email;
                    echo true;
                    exit();
                } else {
                    $err_message["err"] = true;
                    echo json_encode($err_message);
                    exit();
                }
            } else {
                echo json_encode($err_message);
                exit();
            }
        }
    }

    public function logout()
    {   
        // ログアウト時の処理
        //セッション情報を破棄
        $_SESSION = array();
        //セッションクッキーがある場合は削除
        if(isset($_COOKIE['PHPSESSID'])) {
            setcookie('PHPSESSID', '', time() - 3600);
        }
        //セッションファイルを削除
        session_destroy();
        //ログアウト後ホーム画面に移動
        redirect('main_ctrl/index');
    }
} 

?>