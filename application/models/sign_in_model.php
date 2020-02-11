<?php

class sign_in_model extends CI_Model
{
    public function sign_in($email, $password)
    {
        //データベースからのメールアドレスの参照
        $this->db->where('email', $email);
        $query = $this->db->get('users');

        //メールアドレスがあっている場合
        if($query->num_rows() > 0) {
            $row = $query->row_array();
            // パスワードの確認
            if($password === $row['password']) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}

?>