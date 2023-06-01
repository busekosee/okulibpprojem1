<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function registerNow()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run() == TRUE)
			{
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

				$data = array(
					'email' => $email,
					'password' => $hashedPassword,
					'status'=>'1',

				);

				// Veritabanına kaydetme işlemi
				$this->load->model('User_model');
				$this->User_model->insertuser($data);
				$this->session->set_flashdata('success', 'Kullanıcı Başarıyla Oluşturuldu');
				redirect(base_url('welcome/index'));
			}
		}
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function loginnow()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			if ($email != "" && $password != "") {
				$this->load->model('User_model');
				$user = $this->User_model->getUserByEmail($email);

				if ($user && isset($user['status'])) {
					$hashedPassword = $user['password'];

					if (password_verify($password, $hashedPassword)) {
						$this->session->set_userdata('email', $email);
						$this->session->set_userdata('password', $hashedPassword);

						if ($user['status'] == '1') {
							redirect(base_url('application/views/anasayfa.php'));
						} else {
							redirect(base_url('index.php/user/index'));
						}
					} else {
						$this->session->set_flashdata('error', 'Hatalı şifre');
						redirect(base_url('welcome/login'));
					}
				} else {
					$this->session->set_flashdata('error', 'Kullanıcı bulunamadı veya geçersiz status değeri');
					redirect(base_url('welcome/login'));
				}

			}
		}
	}


	public function dashboard()
	{
		$this->load->view('dashboard');
	}
	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('password');
		redirect(base_url('welcome/login'));
	}

	public function profile()
	{
		if ($this->session->userdata('email')) {
			$this->load->model('User_model');
			$email = $this->session->userdata('email');
			$user = $this->User_model->getUserByEmail($email);

			if ($user) {
				$data['user'] = $user;
				$this->load->view('profile', $data);
			} else {
				redirect(base_url('welcome/login'));
			}
		} else {
			redirect(base_url('welcome/login'));
		}
	}

}
