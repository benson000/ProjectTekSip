<?php
class Edit extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('model_admin');
	}

	function delete_nilai($id){
		//transfer to be deleted
		$fromTable = 'nilai';
		$toTable = 'deleted-nilai';

		$result = $this->model_admin->select_data($fromTable, $id);

		$data = array(
			'nim' => $result[0]['nim'],
			'nama' => $result[0]['nama'],
			'nilai_proposal' => $result[0]['nilai_proposal'],
			'nilai_draf' => $result[0]['nilai_draf'],
			'nilai_sidang' => $result[0]['nilai_sidang']
		);

		$this->model_admin->insert_data($data, $toTable);
		$this->model_admin->delete_row($fromTable, $id);
	}

	function delete_data($id){
		//transfer to be deleted
		$fromTable = 'data_skripsi';
		$toTable = 'deleted-data_skripsi';

		$result = $this->model_admin->select_data($fromTable, $id);

		$data = array(
			//data mahasiswa
			'judul' => $result[0]['judul'],
			'nama' => $result[0]['nama'],
			'nim' => $result[0]['nim'],
			'start_date' => $result[0]['start_date'],
			'finish_date' => $result[0]['finish_date'],

			//dosen pembimbing
			'dosen_pembimbing1' => $result[0]['dosen_pembimbing1'],
			'dosen_pembimbing2' => $result[0]['dosen_pembimbing2'],

			//dosen penguji
			'dosen_penguji1' => $result[0]['dosen_penguji1'],
			'dosen_penguji2' => $result[0]['dosen_penguji2'],
			'dosen_penguji3' => $result[0]['dosen_penguji3']
		);

		$this->model_admin->insert_data($data, $table); 
		$this->model_admin->delete_row($table, $id);
	}
}
?>