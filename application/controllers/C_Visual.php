<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Visual extends SDA_Controller
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
		$this->load->view("pages/visualisasi/visualisasi", $data);
		$this->load->view('pages/layout/footer', $data);
	}

	public function upload()
	{
		// Debugging: Lihat isi dari $_FILES
		if (isset($_FILES['myFile'])) {
			$upload_file = $_FILES['myFile']['name'];
			$extension = pathinfo($upload_file, PATHINFO_EXTENSION);

			if ($extension == 'csv') {
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
			} else if ($extension == 'xls') {
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
			} else {
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			}

			try {
				$spreadsheet = $reader->load($_FILES['myFile']['tmp_name']);
				$sheetdata = $spreadsheet->getActiveSheet()->toArray();
				$sheetcount = count($sheetdata);

				date_default_timezone_set('Asia/Jakarta');
				$currentDateTime = new DateTime();
				$formattedDateTime = $currentDateTime->format('Y-m-d H:i:s');

				if ($sheetcount > 1) {
					$data = array();
					for ($i = 1; $i < $sheetcount; $i++) {
						$id_alat = $sheetdata[$i][0];
						$datetime = $sheetdata[$i][1];
						$latitude = $sheetdata[$i][2];
						$langitude = $sheetdata[$i][3];
						$pm25 = $sheetdata[$i][4];
						$speed = $sheetdata[$i][5];
						$elevation = $sheetdata[$i][6];
						$distance = $sheetdata[$i][7];
						$bpm = $sheetdata[$i][8];
						$sign = $sheetdata[$i][9];

						$data[] = array(
							'id_alat' => $id_alat,
							'datetime' => $datetime,
							'latitude' => $latitude,
							'langitude' => $langitude,
							'pm25' => $pm25,
							'speed' => $speed,
							'elevation' => $elevation,
							'distance' => $distance,
							'bpm' => $bpm,
							'sign' => $sign,
							'date_create' => $formattedDateTime,
						);
					}
					// var_dump($data);
					// die;
					$inserdata = $this->db_sensor->insert($data);
					if ($inserdata) {
						$this->session->set_flashdata('message', '<script type="text/javascript">swall("Good job!", "Success!", "success");</script>');
						redirect('C_visual');
					} else {
						$this->session->set_flashdata('message', '<script type="text/javascript">swall("Cannot add the data!", "Error!", "error");</script>');
						redirect('C_Visual');
					}
				}
			} catch (Exception $e) {
				echo "Error loading file: " . $e->getMessage();
			}
		} else {
			$error = isset($_FILES['file']['error']) ? $_FILES['file']['error'] : 'File not uploaded.';
			echo "Upload failed with error: " . $error;
		}
	}

}
