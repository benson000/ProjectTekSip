<?php
class Edit extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('model_admin');
	}

	function execute_edit_nilai(){
		$table = 'nilai';

		$nim = $this->input->post('nim');

		$nilai_proposal = $this->input->post('nilai_proposal');
		$nilai_draf = $this->input->post('nilai_draf');
		$nilai_sidang = $this->input->post('nilai_sidang');

		$where = array(
			'nim' => $nim
		);

		$data = array(
			'nilai_proposal' => $nilai_proposal,
			'nilai_draf' => $nilai_draf,
			'nilai_sidang' => $nilai_sidang
		);

		$this->model_admin->updateData($where, $data, $table);

		return $this->load->view('admin/dashboard/view_nilai', $data);
	}

	function execute_edit_data(){
		$table = 'data_skripsi';

		$id = $this->input->post('id');

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

		$where = array(
			'id' => $id
		);

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

		$this->model_admin->updateData($where, $data, $table);

		return $this->load->view('admin/dashboard/view_data', $data);
	}
	
	function edit_data(){
		return $this->load->view('admin/edit_data');
	}

	function edit_nilai(){
		return $this->load->view('admin/edit_nilai');
	}
} 
?>