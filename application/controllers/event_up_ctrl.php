<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_up_ctrl extends CI_Controller 
{   
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Tokyo');
    }
    
    public function index()
    {           
        //イベント投稿が押された時
        if(isset($_POST['btn'])) {
            //XSSフィルタを通してpostの値を受け取る
            $title   = $this->input->post('title', true);
            $year    = $this->input->post('year');
            $month   = $this->input->post('month');
            $day     = $this->input->post('day');
            $content = $this->input->post('content', true);
            
            //日本時間を設定
            date_default_timezone_set('Asia/Tokyo');
            
            //開催日のタイムスタンプを取得
            $event_time = strtotime($year.'-'.$month.'-'. $day);
            //開催日の日付を取得
            $event_hold = date('Y-m-d', $event_time);
        
            //セッションにイベントの内容を取得
            $_SESSION['title']      = html_escape($title);
            $_SESSION['event_hold'] = $event_hold;
            $_SESSION['content']    = html_escape($content);

            //フォームバリテーションをロード
            $this->load->library('form_validation');

            $this->form_validation->set_rules('title', 'イベントタイトル', 'required');
            $this->form_validation->set_rules('content', 'イベント概要', 'required');
            
            if($this->form_validation->run()) {
                //確認画面に移動
                redirect(site_url('admin_ctrl/load_page_event_up_confirm'));
            } else {
                //イベント投稿画面に移動
                redirect(site_url('admin_ctrl/load_page_event_update'));
            }
        }
    }

    public function admin()
    {
        //確認ボタンが押された時
        if(isset($_POST['confirm_btn'])) {

            if(isset($_FILES['file'])) {
                //画像ファイルの設定
                $config['upload_path']   = './assets/upload_images';
                $config['allowed_types'] = '*';
                $config['max_size']      = '1024';
                $config['max_width']     = '1280';
                $config['max_height']    = '768';
                $config['overwrite']     = true;
                $config['file_name']     = date('U') . '_' . $_FILES['file']['name'];

                //uplaodライブラリをload
                $this->load->library('upload', $config);

                //画像がアップロードされた場合
                if($this->upload->do_upload('file')) {
                    $full_path = $config['file_name'];
                }
            }

            //画像のパスが空の場合
            if(empty($full_path)) {
                $full_path = "NO_IMAGE.png";
            }

            //データーベースに接続
            $this->load->model('event_model');
            $this->event_model->event_up($_SESSION['title'], $_SESSION['content'], $_SESSION['event_hold'], $full_path);

            //formで取得したセッションの削除
            unset($_SESSION['title']);
            unset($_SESSION['event_hold']);
            unset($_SESSION['content']);

            //ホームに移動
            redirect('admin_ctrl/load_page_event_list');
        }
    }
}
?>