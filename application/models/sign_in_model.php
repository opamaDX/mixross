<?php

class Sign_in_model extends CI_Model
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
                $_SESSION['user_id']         = $row['id'];
                $_SESSION['user_first_name'] = $row['first_name'];
                $_SESSION['user_last_name']  = $row['last_name'];
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