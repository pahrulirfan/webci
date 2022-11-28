<?php

class ModelC extends CI_Model
{
	public function semua_data()
	{
		return $this->db->get('table_c')->result();
	}

	public function simpan_data($data)
	{
		$this->db->insert('table_c', $data);
	}
}
