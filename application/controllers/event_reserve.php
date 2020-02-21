<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_reserve extends CI_Controller
{
    public function index()
    {
        //ログインした状態で、セッションのuser_idを取得している場合
        if(isset($_SESSION['user_id'])) {
            //予約ボタンが押された時
            if(isset($_GET['reserve'])) {
                //イベントidを取得しセッションに格納した後に予約確認画面に移動
                $_SESSION['event_id'] = $this->input->get('event_id');
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
        if(isset($_GET['reserve_confirm'])) { 
            
            //セッションの中に格納されているevent_idを取得
            $event_id = $_SESSION['event_id'];

            //event_modelをロードする
            $this->load->model('event_model');

            //この選択したイベントに参加している人の情報を取得
            $event_people = $this->event_model->event_people_mail($event_id);

            if($event_people === true) {
                //eventの参加人数を増やす
                //eventに参加する人の名前とメールアドレスと登録した日時をデータベースに記入
                $date = date('Y-m-d');
                $this->event_model->update($event_id, $_SESSION['user_first_name'], $_SESSION['user_last_name'], $_SESSION['user_email'], $date);

                //emailライブラリをロード
                $this->load->library('email');
                //メールの内容
                $message = "今回は参加予約をしていただいてありがとうございました。";
                //イベント申し込み完了のメールを送信する
                $this->email->from('fumiya5863@gmail.com', '櫻井郁也');
                $this->email->to($_SESSION['user_email']);
                $this->email->subject('イベント申し込み完了メール');
                $this->email->message($message);
                $this->email->send();
            
                //イベントidを削除後ホーム画面に移動
                unset($_SESSION['event_id']);
                redirect('main_ctrl');
            } else {
                //予約済みの人は別画面に移動
                unset($_SESSION['event_id']);
                redirect('main_ctrl');
            }
        }
    }
}

?>
