<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Rekomendasi extends SDA_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('datasensor_cycledoc_M', 'db_sensor');
		$this->requiredLogin();
		preventAccessPengguna(
			array(
				AD
			)
		);
	}
	public function index()
	{

		$data['judul'] = "Halaman Unit";
		$data['Unit'] = $this->User_model->get();
		$data['rute'] = $this->db_sensor->get_routes();


		$this->load->view('pages/layout/header', $data);
		$this->load->view("pages/rekomendasi/rekomendasi", $data);
		$this->load->view('pages/layout/footer', $data);
	}
}
