<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_edit_delete extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('event_model');
        date_default_timezone_set('Asia/Tokyo');
    }
    
    public function edit()
    {
        // XSSフィルタを通してidを受け取る
        $_SESSION['edit_id'] = $this->input->get('id', true);
        //編集ページに移動
        redirect('admin_ctrl/load_page_event_edit_confirm');
    }

    public function edit_confirm()
    {
        if(isset($_POST['edit_btn'])) {
            //XSSフィルタを通してpostの値を受け取る
            $title   = html_escape($this->input->post('title', true));
            $year    = $this->input->post('year');
            $month   = $this->input->post('month');
            $day     = $this->input->post('day');
            $content = html_escape($this->input->post('content', true));

            //開催日のタイムスタンプを取得
            $event_time = strtotime($year.'-'.$month.'-'.$day);
            //開催日の日付を取得
            $event_hold = date('Y-m-d', $event_time);

            //データベースを編集
            $this->event_model->edit($_SESSION['edit_id'], $title, $content, $event_hold);
            //セッションに格納しているIDを削除し、イベントリストのページに移動
            unset($_SESSION['edit_id']);
            redirect('admin_ctrl/load_page_event_list');
        }
    }

    public function delete()
    {
        // XSSフィルタを通してidを受け取りセッションに入れる
        $_SESSION['delete_id'] = $this->input->get('id', true);
        //イベント削除確認ページに移動
        redirect('admin_ctrl/load_page_event_delete_confirm');
    }

    public function delete_confirm()
    {
        //削除ボタンが押された時
        if(isset($_POST['delete_btn'])) {
            //データベースから削除
            $this->event_model->delete($_SESSION['delete_id']);
            //セッションに格納していたIDを削除し、イベントリストのページに移動
            unset($_SESSION['delete_id']);
            redirect('admin_ctrl/load_page_event_list');
        }
    }

    public function delete_people()
    {
        //XSSフィルタを通してidを受け取りセッションに入れる
        $_SESSION['delete_people_id'] = $this->input->get('id', true);
        // イベント参加者削除ページに移動
        redirect('admin_ctrl/load_page_event_delete_people_confirm');
    }

    public function delete_people_confirm()
    {
        if(isset($_POST['delete_people_btn'])) {
            $event_id = $this->input->post('event_id', true);
            //データベースから参加者を削除
            $this->event_model->event_delete_people($_SESSION['delete_people_id']);
            //データベースから参加人数を1人減らす
            $this->event_model->event_update_people($event_id);
            
            //セッションに格納しているIDを削除し、参加者リストのページに移動
            unset($_SESSION['delete_people_id']);
            redirect('admin_ctrl/load_page_event_list');
        }
    }
}

?>