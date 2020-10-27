<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */	
	public function index()
	{

		$data['nama_lengkap'] = "Dika Pratama";
		$data['nim'] = 1810330026;
		$mahasiswa[0] = array(
			'nim' => "1810330026",
			'nama' => "Dika Pratama"
		);
		$data['mahasiswa'] = $mahasiswa;

		$this->load->view('mahasiswa_index',$data);
	}

	public function tambah()
	{
		$this->load->view('mahasiswa_tambah');
	}
}