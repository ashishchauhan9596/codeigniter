<?php


class UserModel extends CI_Model {
	
	var $table = 'users';

	public function all()
	{
		return $this->db->get($this->table)->result(); // object
		// return $this->db->get($this->table)->result_array(); // array
		// return $this->db->get($this->table)->row(); // object
		// return $this->db->get($this->table)->row_array(); // object
		// return $this->db->get($this->table)->row('email'); // string
	}

	public function check()
	{
		$this->db->where('name', $this->input->post('name'));
		$this->db->where('email', $this->input->post('email'));
		$query = $this->db->get('users');

		if ($query->num_rows() == 1) {
			return $this->db->where('email', $this->input->post('email'))->get($this->table)->row();
			//return $sucess = "logged in";
		}
		else{
			return $sucess = "error";
		}
	}

	public function save()
	{
		$data = array(
		'name' => $this->input->post('name'),
		'email' => $this->input->post('email')
		);

		return $this->db->insert('users', $data);
		
	}

	public function edit($id)
	{
		//die($id);
		// $data = array(
		// 'name' => $this->input->post('name'),
		// 'email' => $this->input->post('email')
		// );

		// $this->db->where('id', $id);
		// $this->db->update('users', $data);
		$this->db->where('id', $id);
		$query = $this->db->get('users');

		if ($query->num_rows() == 1) {
			return $this->db->where('id', $id)->get($this->table)->row();
			//return $sucess = "logged in";
		}
		else{
			return $sucess = "error";
		}
	}

	public function update($id)
	{
		$data = array(
		'name' => $this->input->post('name'),
		'email' => $this->input->post('email')
		);

		$this->db->where('id', $id);
		$this->db->update('users', $data);
		$this->db->where('id', $id);
		$query = $this->db->get('users');

		if ($query->num_rows() == 1) {
			return $this->db->where('id', $id)->get($this->table)->row();
			//return $sucess = "logged in";
		}
		else{
			return $sucess = "error";
		}
	}
}