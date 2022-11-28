<?php

class ControllerC extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelC');
	}

	public function index()
	{
		$data['data_kelas'] = $this->ModelC->semua_data();
//		var_dump($data);
		return $this->load->view('uts/v_index', $data);
	}

	public function tambah()
	{
		return $this->load->view('uts/form_tambah');
	}

	public function proses_tambah()
	{
		$data = array(
			'kolom_jurusan' => $this->input->post('txt_jurusan'),
			'kolom_kelas' => $this->input->post('txt_kelas'),
			'kolom_isi' => $this->input->post('txt_isi')
		);
		$this->ModelC->simpan_data($data);
		return redirect('controllerc/index');
	}

}
