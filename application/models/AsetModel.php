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

	public function hapus_data($id)
	{
		$this->db->delete('tabel_aset', ['id' => $id]);
	}

	public function edit_data($id)
	{
		return $this->db->get_where('tabel_aset', ['id' => $id])->row_object();
	}

	public function simpan_edit($id, $data)
	{
		$this->db->update('tabel_aset', $data, ['id' => $id]);
	}
}
