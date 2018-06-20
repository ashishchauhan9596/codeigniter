<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function getAll()
	{
		$this->load->model('UserModel', 'user');
		$users = $this->user->all();
		// echo json_encode($users);
		$this->load->view('users', compact('users'));
	}

	// public function register()
	// {
	// 	$this->load->view('registration');
	// }
}