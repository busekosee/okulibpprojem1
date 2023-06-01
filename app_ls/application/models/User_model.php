<?php
class User_model extends CI_Model
{
	function create($formArray)
	{
		$this->db->insert('users', $formArray);
	}

	// Kullanıcı oluşturmak için verileri users tablosuna ekler

	function all()
	{
		return $this->db->get('users')->result_array();
	}

	// Tüm kullanıcıları getirir

	function getUser($userId)
	{
		$this->db->where('user_id', $userId);
		return $this->db->get('users')->row_array();
	}

	// Belirli bir kullanıcıyı kullanıcı kimliğiyle getirir

	function updateUser($userId, $formArray)
	{
		$this->db->where('user_id', $userId);
		$this->db->update('users', $formArray);
	}

	// Belirli bir kullanıcıyı kullanıcı kimliğiyle günceller

	function deleteUser($userId)
	{
		$this->db->where('user_id', $userId);
		$this->db->delete('users');
	}

	// Belirli bir kullanıcıyı kullanıcı kimliğiyle siler
	function getUserByEmail($email) {
		$this->db->where('email', $email);
		return $this->db->get('users')->row_array();
	}
	function insertuser($data)
	{
		$this->db->insert('users', $data);
	}

	// Kullanıcı verilerini users tablosuna ekler

	public function getUserInfo()
	{
		if ($this->isLogged()) {
			$email = $_SESSION['email'];
			$password = $_SESSION['password'];
			$query = $this->db->prepare("SELECT * FROM users WHERE email =? AND password=? ");
			$query->execute(array($email, $password));
			return $query->fetch(PDO::FETCH_ASSOC);
		} else {
			return false;
		}
		$this->myuserinfo = $this->sessionManager->getUserInfo();
		$this->myuserinfo['name'];
	}

	// Kullanıcının oturum açmış olup olmadığını kontrol eder ve oturum açmışsa kullanıcı bilgilerini veritabanından alır

	public static function createSession($array)
	{
		foreach ($array as $key => $value) {
			$_SESSION[$key] = helper::cleaner($value);
		}
	}

}
