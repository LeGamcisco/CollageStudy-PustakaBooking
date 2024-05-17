<?php defined('BASEPATH') or exit('No Direct Script Access Allowed');


class Kelompok extends CI_Controller
{
	// public function __construct()
	// {
	// 	// parent::__construct();
	// 	// cek_login();
	// 	// cek_user();
	// }


	public function index()
	{
		$data['judul'] = "Daftar Anggota Kelompok 5";
		$ids = array(19220057, 19220920, 19220916, 19220208, 19220151, 19220735, 19220330);
		$data['result'] = $this->ModelKelompok->get_data_by_ids($ids);

		if ($this->session->userdata('email')) {
			$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

			$data['user'] = $user['nama'];

			$this->load->view('templates/templates-user/header', $data);
			$this->load->view('kelompok/index', $data);
			$this->load->view('templates/templates-user/modal');
			$this->load->view('templates/templates-user/footer', $data);
		}
		else {
			$data['user'] = 'Pengunjung';
			$this->load->view('templates/templates-user/header', $data);
			$this->load->view('kelompok/index', $data);
			$this->load->view('templates/templates-user/modal');
			$this->load->view('templates/templates-user/footer', $data);
		}
	}

}