<?php
class Aset extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('AsetModel');
	}

	function index()
	{
		$data['data_aset'] = $this->AsetModel->semua_data();
		// var_dump($data);
		// die();
		return $this->load->view('aset/v_index', $data);
	}

	public function tambah()
	{
		return $this->load->view('aset/v_tambah');
	}

	public function simpanTambah()
	{
		$data = array(
			'nama_aset' => $this->input->post('txt_nama'),
			'jenis' => $this->input->post('txt_jenis'),
			'lokasi' => $this->input->post('txt_lokasi'),
			'jumlah' => $this->input->post('txt_jumlah')
		);
		$this->AsetModel->simpan_data($data);
		return redirect('aset/index');
	}
}
