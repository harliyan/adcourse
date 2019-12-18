<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{

	public function get_barat_count()
	{
		$sql = " SELECT count(*) as count from tb_telecenter where id_kecamatan = '1' ";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_utara_count()
	{
		$sql = " SELECT count(*) as count from tb_telecenter where id_kecamatan = '2' ";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_timur_count()
	{
		$sql = " SELECT count(*) as count from tb_telecenter where id_kecamatan = '3' ";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_selatan_count()
	{
		$sql = " SELECT count(*) as count from tb_telecenter where id_kecamatan = '4' ";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_all_count()
	{
		$sql = " SELECT count(*) as count from tb_telecenter";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_baik()
	{
		$sql = " SELECT count(*) as count from tb_telecenter where ket_1 = 'Baik' ";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_kurang_baik()
	{
		$sql = " SELECT count(*) as count from tb_telecenter where ket_1 = 'Kurang Baik' ";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_tidak_baik()
	{
		$sql = " SELECT count(*) as count from tb_telecenter where ket_1 = 'Tidak Baik' ";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_belum()
	{
		$sql = " SELECT count(*) as count from tb_telecenter where ket_1 = 'Belum Ada Status' ";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_pc_layak()
	{
		$sql = " SELECT count(*) as count from tb_telecenter where pc_status = 'Layak' ";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_pc_tidaklayak()
	{
		$sql = " SELECT count(*) as count from tb_telecenter where pc_status = 'Tidak Layak' ";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_jaringan_layak()
	{
		$sql = " SELECT count(*) as count from tb_telecenter where jaringan_status = 'Layak' ";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_jaringan_tidaklayak()
	{
		$sql = " SELECT count(*) as count from tb_telecenter where jaringan_status = 'Tidak Layak' ";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_printer_layak()
	{
		$sql = " SELECT count(*) as count from tb_telecenter where printer_status = 'Layak' ";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_printer_tidaklayak()
	{
		$sql = " SELECT count(*) as count from tb_telecenter where printer_status = 'Tidak Layak' ";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_listrik_layak()
	{
		$sql = " SELECT count(*) as count from tb_telecenter where listrik_status = 'Layak' ";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_listrik_tidaklayak()
	{
		$sql = " SELECT count(*) as count from tb_telecenter where listrik_status = 'Tidak Layak' ";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_home()
	{
		$sql = " SELECT count(*) as count from tb_telecenter where ket_1 = 'Belum Ada Status' ";
		$data = $this->db->query($sql);

		return $data->result();
	}
}
