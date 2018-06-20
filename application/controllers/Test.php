<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function message($param = 'ashish')
	{
		$strings = $this->input->get(['name', 'email']);
		echo "<pre>";
		print_r($strings);
		echo "</pre>";
		die;
	}

}