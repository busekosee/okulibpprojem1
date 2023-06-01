<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RepliesController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Reply_model');
	}

	public function show_replies()
	{
		$message_id = $this->input->get('message_id'); // $_GET yöntemiyle message_id değerini alın

		$replies = $this->Reply_model->get_replies_by_message_id($message_id);

		$data = array(
			'replies' => $replies
		);

		$this->load->view('show_replies', $data);
	}


}
