<?php
defined('BASEPATH') OR exit('');
class Dashboard extends Admin_Controller{
	public function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$this->load->view('dashboard');
	}
}


