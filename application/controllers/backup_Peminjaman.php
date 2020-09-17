<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

    public function index()
	{	
			$konten = $this->load->view('peminjaman/list_pinjam',null,true);
			$data_json = array(
				'konten' => $konten,
				'titel' => 'List Data Peminjmaan'
			);
			echo json_encode($data_json);
    }
    // public function form_create()
	// {		
	// 		$konten = $this->load->view('peminjaman/form_pinjam',null,true);
	// 		$data_json = array(
	// 			'konten' => $konten,
	// 			'titel' => 'List Data Peminjmaan'
	// 		);
	// 		echo json_encode($data_json);
    // }
    
}