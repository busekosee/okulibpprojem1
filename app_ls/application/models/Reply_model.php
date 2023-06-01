<?php
class Reply_model extends CI_Model {
	public function get_replies_by_message_id($message_id) {
		// Veritabanında ilgili mesaja ait yanıtları almak için sorguyu çalıştırın
		$query = $this->db->where('message_id', $message_id)
			->get('replies');
		return $query->result();
	}
}

