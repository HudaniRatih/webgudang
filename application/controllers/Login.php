<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}


	// public function setSession()
	// {
	// 	$this->load->library('session');
	// 	$id_user = $this->input->post('id_user');
	// 	$email = $this->input->post('email');
	// 	$level = $this->input->post('role');
	// 	$nama = $this->input->post('username');
		
	// 	$this->session->set_userdata('id_user', $id_user);
	// 	$this->session->set_userdata('email', $email);
	// 	$this->session->set_userdata('role', $role);
	// 	$this->session->set_userdata('username', $username);
	// }

	// public function logout()
	// {
	// 	$this->load->library('session');
	// 	$this->session->sess_destroy();
	// 	redirect('login');
	// }
}

