<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_messages()
	{
		return $this->db->get('messages')->result();
	}
	public function add_message($data)
	{
		$this->db->insert('messages', $data);
		return $this->db->insert_id();
	}

	public function add_reply($data)
	{
		$reply_data = array(
			'message_id' => $data['message_id'],
			'reply' => $data['reply'],
			'is_selected' => $data['is_selected']
		);



		// Veritabanına ekleme işlemini gerçekleştirin
		$this->db->insert('replies', $reply_data);

		// Eklendiği takdirde, eklenen yanıdın ID'sini döndürün
		return $this->db->insert_id();
	}


}
