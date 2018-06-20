<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function saving()
	{

		$this->load->model('UserModel', 'reg');
		$this->reg->save();
		$sucess = "done registration";
		$this->load->view('login' , compact('sucess'));
		// $this->load->view('registration')->helper('form');
		// $users = $this->user->all();
		// echo json_encode($users);
		// $this->load->view('users', compact('users'));

	}
	

	public function register()
	{
		$this->load->view('registration');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function checking()
	{
		$this->load->model('UserModel','login');
		$sucess = $this->login->check();
		// $this->load->view('login' , compact('sucess'));
		// $this->load->model('UserModel', 'user');
		// $users = $this->user->all();
		// echo json_encode($users);
		$this->load->view('users', compact('sucess'));
	}
	public function editing($id)
	{
		// die($id);
		$this->load->model('UserModel','uedit');
		//$this->uedit->edit($id);
		$edit = $this->uedit->edit($id);
		$this->load->view('update', compact('edit'));
	}

	public function updating($id)
	{
		//die($id);
		$this->load->model('UserModel','update');
		$sucess = $this->update->update($id);
		$this->load->view('users', compact('sucess'));

	}
}