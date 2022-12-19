<?php
class AsetModel extends CI_Model
{

	public function semua_data()
	{
		return $this->db->get('tabel_aset')->result();
	}

	public function simpan_data($data)
	{
		$this->db->insert('tabel_aset', $data);
	}
}
