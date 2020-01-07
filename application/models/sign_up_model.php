<?php 
class Sign_up_model extends CI_Model {

    public function __construct()
    {
            parent::__construct();
    }

    // 仮テーブルにデータを格納する
    public function pre_insert($url_token) {

        $pre_user_data = array(
            'url_token' => $url_token,
            'email' => $this->session->userdata('email')
        );

        $this->db->insert('pre_users', $pre_user_data);
    }

}