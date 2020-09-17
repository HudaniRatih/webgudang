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
	
    public function form_pinjam()
	{		
			$konten = $this->load->view('peminjaman/form_pinjam',null,true);
			$data_json = array(
				'konten' => $konten,
				'titel' => 'Form Peminjmaan'
			);
			echo json_encode($data_json);
	}
	public function user_list()
	{		
			$konten = $this->load->view('peminjaman/user_list_pinjam');
	}
	

	public function list_pengajuan(){
		$konten = $this->load->view('peminjaman/list_pengajuan',null,true);
			$data_json = array(
				'konten' => $konten,
				'titel' => 'Form Peminjmaan'
			);
			echo json_encode($data_json);
			
	}
	
	
}