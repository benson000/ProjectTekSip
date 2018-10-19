<?php
class Input extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('model_admin');
	}

	function execute_input_nilai(){
		$table = 'nilai';

		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$nilai_proposal = $this->input->post('nilai_proposal');
		$nilai_draf = $this->input->post('nilai_draf');
		$nilai_sidang = $this->input->post('nilai_sidang');
		$date_created = $this->input->post('date_created');

		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'nilai_proposal' => $nilai_proposal,
			'nilai_draf' => $nilai_draf,
			'nilai_sidang' => $nilai_sidang,
			'date_created' => $date_created
		);

		$this->model_admin->insert_data($data, $table);

		$data = array(
			'status' => 'Sukses Input Nilai!'
		);

		return $this->load->view('admin/index/input_nilai', $data);
	}

	function execute_input_data(){
		$table = 'data_skripsi';

		//data mahasiswa
		$judul = $this->input->post('judul');
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');

		//tanggal
		$start_date = $this->input->post('start_date');
		$finish_date = $this->input->post('finish_date');

		//dosen pembimbing
		$dosen_pembimbing1 = $this->input->post('dosen_pembimbing1');
		$dosen_pembimbing2 = $this->input->post('dosen_pembimbing2');

		//dosen penguji
		$dosen_penguji1 = $this->input->post('dosen_penguji1');
		$dosen_penguji2 = $this->input->post('dosen_penguji2');
		$dosen_penguji3 = $this->input->post('dosen_penguji3');

		$data = array(
			//data mahasiswa
			'judul' => $judul,
			'nama' => $nama,
			'nim' => $nim,
			'start_date' => $start_date,
			'finish_date' => $finish_date,

			//dosen pembimbing
			'dosen_pembimbing1' => $dosen_pembimbing1,
			'dosen_pembimbing2' => $dosen_pembimbing2,

			//dosen penguji
			'dosen_penguji1' => $dosen_penguji1,
			'dosen_penguji2' => $dosen_penguji2,
			'dosen_penguji3' => $dosen_penguji3
		);

		$this->model_admin->insert_data($data, $table);

		$data = array(
			'status' => 'Sukses Input Data!'
		);

		return $this->load->view('admin/input_data', $data);
	}

	function input_nilai(){
		$data = array('status' => '');

		return $this->load->view('admin/input_nilai', $data);
	}

	function input_data(){
		$data = array('status' => '');
		
		return $this->load->view('admin/input_data', $data);
	}
} 
?>