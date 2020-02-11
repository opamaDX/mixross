<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_reserve extends CI_Controller
{
    public function index()
    {
        //ログインした状態で、セッションのuser_idを取得している場合
        if($_SESSION['user_id']) {
            //予約ボタンが押された時
            if(isset($_POST['reserve'])) {
                //イベントidを取得しセッションに格納した後に予約確認画面に移動
                $_SESSION['event_id'] = $_POST['event_id'];
                redirect('main_ctrl/load_page_event_reserve');
            }
        } else {
            //ログインしていない場合にログイン画面に移動
            redirect('main_ctrl/load_page_sign_in');
        }
    }

    public function reserve_confirm()
    {
        //予約確認ボタンが押された時
        if(isset($_POST['reserve_confirm'])) { 
            
            //セッションの中に格納されているevent_idを取得
            $event_id = $_SESSION['event_id'];

            //event_modelをロードする
            $this->load->model('event_model');

            //eventの予約人数を増やす
            $this->event_model->update($event_id);

            //emailライブラリをロード
            $this->load->library('email');
            //メールの内容
            $message = "今回は参加予約をしていただいてありがとうございました。";
            //予約登録のメールを送信する
            $this->email->from('fumiya5863@gmail.com', '櫻井郁也');
            $this->email->to($_SESSION['user_email']);
            $this->email->subject('Email Test');
            $this->email->message($message);
            $this->email->send();
            
            //イベントidを削除後ホーム画面に移動
            unset($_SESSION['event_id']);
            redirect('main_ctrl');
        }
    }
}

?>
