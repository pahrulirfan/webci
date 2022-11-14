<?php
class AsetModel extends CI_Model
{

	public function semua_data()
	{
		return $this->db->get('tabel_aset')->result();
	}
}
