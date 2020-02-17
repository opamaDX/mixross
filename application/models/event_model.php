<?php

class Event_model extends CI_Model
{
    public function event_up($title, $content, $event_hold, $file)
    {   
        //データべースに格納する値
        $data = array(
            'title'       => $title,
            'content'     => $content,
            'event_hold'  => $event_hold,
            'file_path'   => $file
        );
        //データーベースに値を追加
        $this->db->insert('event', $data);
    }

    public function event_get($id = NULL)
    {
        //削除、編集を選んだ時に$idを取得した場合
        if($id) {
            $this->db->where('id', $id);
        } else {
            $this->db->order_by('event_hold', 'DESC');
        }
        //データベースの値を取得
        $query = $this->db->get('event');
        
        //連想配列に値が一つでも格納されている時
        if($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return [];
        }
    }

    public function event_reserve_get($event_id)
    {
        //イベントidを元にデータベースから値を取得
        $this->db->where('event_id', $event_id);
        $query = $this->db->get('event_reserve');

        //連想配列に値が一つでも格納されている時
        if($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return [];
        }
    }

    public function event_people_get($delete_people_id)
    {
        //イベント参加者idを元にデータベースから値を取得
        $this->db->where('id', $delete_people_id);
        $query = $this->db->get('event_reserve');

        return $query->result_array();
    }

    public function event_delete_people($delete_people_id)
    {
        //イベント参加者idを元にデータベースから値を削除
        $this->db->where('id', $delete_people_id);
        $this->db->delete('event_reserve');
    }

    public function event_update_people($event_id)
    {
        //予約人数を1人減らす
        $sql = "UPDATE event SET people = people - 1 WHERE id = ?";
        $this->db->query($sql, array($event_id));
    }

    public function edit($id, $title, $content, $event_hold)
    {
        $data = array(
            'title'      => $title,
            'content'    => $content,
            'event_hold' => $event_hold,
        );

        //データベースを編集
        $this->db->where('id', $id);
        $this->db->update('event', $data);
    }

    public function delete($id)
    {
        //取得したidからイベントを削除
        $this->db->delete('event', array('id' => $id));
        //取得したidからイベントに参加する人を削除
        $this->db->delete('event_reserve', array('event_id' => $id));
    }

    public function update($event_id, $first_name, $last_name, $user_email, $date)
    {   
        //予約人数を1人増やす
        $sql = "UPDATE event SET people = people + 1 WHERE id = ?";
        //データーベースに格納する値
        $name = $last_name.$first_name;
        $data = array(
            'event_id' => $event_id,
            'name'     => $name,
            'email'    => $user_email,
            'date'     => $date
        );
        
        //データベースに値を追加その時にtransactio処理をでやる
        $this->db->trans_start();
        $this->db->query($sql, array($event_id));
        $this->db->insert('event_reserve', $data);
        $this->db->trans_complete();
    }
}
?>