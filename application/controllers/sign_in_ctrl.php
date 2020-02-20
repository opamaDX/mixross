<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_in_ctrl extends CI_Controller
{   
    public function login()
    {
        //変数の初期化
        $err_message = array();
        
        //login_btnが押された時
        if($this->input->post('login_btn')) {
              
            //XSSフィルタでemailとpasswordを受け取る
            $email    = $this->input->post('email', true);
            // パスワードはハッシュ化させておく
            $password = $this->input->post('password', true); 

            //emailとpasswordのバリテーション
            if(!preg_match('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/', $email)) {
               $err_message["email"]  = true;   
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
                    //セッションID固定攻撃対策
                    session_regenerate_id(true);
                    $_SESSION['user_email'] = $email;
                    echo true;
                    exit();
                } else {
                    $err_message["sign_in"] = true;
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
        unset($_SESSION['user_id']);
        unset($_SESSION['user_first_name']);
        unset($_SESSION['user_last_name']);
        unset($_SESSION['user_email']);
        redirect('main_ctrl/index');
    }
} 

?>