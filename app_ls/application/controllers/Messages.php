<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Message_model');
	}

	public function index()
	{
		$data['messages'] = $this->Message_model->get_messages();
		$this->load->view('message.php', $data);
	}
	public function add_message()
	{
		// Mesaj ekleme formu gönderildiğinde bu fonksiyon çalışacak
		// Form verilerini alın ve Message_model'e göndererek mesajı ekleyin
		$data = array(
			'sender_id' => $this->input->post('sender_id'),
			'receiver_id' => $this->input->post('receiver_id'),
			'message' => $this->input->post('message')
		);

		$message_id = $this->Message_model->add_message($data);

		if ($message_id) {
			// Mesaj başarıyla eklendiğinde yapılacak işlemler
			redirect('messages');
		} else {
			// Hata durumunda yapılacak işlemler
		}
	}

	public function add_reply()
	{
		// Mesaj yanıtı formu gönderildiğinde bu fonksiyon çalışacak
		// Form verilerini alın ve Message_model'e göndererek yanıtı ekleyin
		$data = array(
			'message_id' => $this->input->post('message_id'),
			'reply' => $this->input->post('reply')
		);


		// Mesajın seçilip seçilmediğini kontrol edin
		$selected_messages = $this->input->post('selected_messages');
		if (!empty($selected_messages) && in_array($data['message_id'], $selected_messages)) {
			$data['is_selected'] = 1; // Mesaj seçiliyse "is_selected" değerini 1 olarak ayarlayın
		} else {
			$data['is_selected'] = 0; // Mesaj seçili değilse "is_selected" değerini 0 olarak ayarlayın
		}

		$reply_id = $this->Message_model->add_reply($data);

		if ($reply_id) {
			// Yanıt başarıyla eklendiğinde yapılacak işlemler
			redirect('messages');
		} else {
			// Hata durumunda yapılacak işlemler
		}
	}



}
