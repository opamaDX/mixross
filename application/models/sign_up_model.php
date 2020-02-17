<?php

class Sign_up_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Tokyo');
    }

    // 仮テーブルにデータを格納する
    public function pre_regist($url_token,$birthday,$graduate_date) {

        var_dump($graduate_date);
        var_dump($birthday);

        $pre_user_data = array(
            'url_token'       => $url_token,
            'last_name'       => $this->session->userdata('last_name'),
            'last_kana_name'  => $this->session->userdata('last_kana_name'),
            'first_name'      => $this->session->userdata('first_name'),
            'first_kana_name' => $this->session->userdata('first_kana_name'),
            'gender'          => $this->session->userdata('gender'),
            'birthday'        => $birthday,
            'email'           => $this->session->userdata('email'),
            'password'        => password_hash($this->session->userdata('pass'), PASSWORD_DEFAULT),
            'university'      => $this->session->userdata('university'),
            'faculty'         => $this->session->userdata('faculty'),
            'department'      => $this->session->userdata('department'),
            'graduate_date'   => $graduate_date,
            'high_school'     => $this->session->userdata('high_school'),
            'seminar'         => $this->session->userdata('seminar'),
            'club'            => $this->session->userdata('club')
        );

        $this->db->insert('pre_users', $pre_user_data);
    }

    // 本テーブルにデータを格納する
    public function regist($url_token) {

        $query = $this->db->where('url_token',$url_token)->get('pre_users');
        $user_data = $query->row_array();

        $user_data = array(
            'last_name' => element('last_name', $user_data),
            'last_kana_name' => element('last_kana_name', $user_data),
            'first_name' => element('first_name', $user_data),
            'first_kana_name' => element('first_kana_name', $user_data),
            'gender' => element('gender', $user_data),
            'birthday' => element('birthday', $user_data),
            'email' => element('email', $user_data),
            'password' => element('password', $user_data)
        );

        // 仮テーブルのカラムを削除し、本テーブルに移動する
        $this->db->insert('users', $user_data);
        $this->db->delete('pre_users', array('url_token' => $url_token));
    }



    // 1時間以内のアクセスか調べる
    public function check_date($url_token) {

        $query = $this->db->select('date')->from('pre_users')->where('url_token', $url_token)->get();

        $result = $query->row_array();
        $expire_date = strtotime($result['date']) + 3600;

        if ( time() < $expire_date) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // 本登録済みでないか確認する
    public function check_regist($url_token) {

        $query = $this->db->select('email')->from('users')->where('url_token', $url_token)->get();
        $result = $query->row_array();

        var_dump($result);

        if ( time() < $expire_date) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // フォーム入力された生年月日の統合
    public function create_birthday() {
        $year = $this->session->userdata('year');
        $month = $this->session->userdata('month');
        $day = $this->session->userdata('day');

        echo "誕生日は".$year.$month.$day."\n";

        $birthday = date('Y-m-d', mktime(0, 0, 0, $month, $day, $year));

        return $birthday;
    }

    // フォーム入力された卒業日の統合
    public function create_graduate() {
        $graduate_year = $this->session->userdata('graduate_year');
        $graduate_month = $this->session->userdata('graduate_month');

        echo "卒業日は".$graduate_year.$graduate_month."\n";

        $graduate_date = date('Y-m-d', mktime(0, 0, 0, $graduate_month, 1 ,$graduate_year));

        return $graduate_date;
    }
}