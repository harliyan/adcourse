<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{

	public function tampil()
	{
		$sql = " SELECT * FROM `users` ";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}


	public function edit($table, $id)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('id_user', $id);
		return $this->db->get()->result();
	}

	public function update($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function hapus($id)
	{
		$hasil = $this->db->query("DELETE FROM users WHERE id_user='$id'");
		return $hasil;
	}
}
