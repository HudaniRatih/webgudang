<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trash extends CI_Controller {

	public function index()
	{		

			$konten = $this->load->view('trash/list_trash',null,true);
			
			$data_json = array(
				'konten' => $konten,
				'titel' => 'List Data Trash'
			);

			echo json_encode($data_json);
	}
}