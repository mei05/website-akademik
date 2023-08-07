<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_model extends CI_Model
{
	public $table = 'detail_penjualan';
	public $id = 'detail_penjualan.id';
	public function __construct()
	{
		parent::__construct();
	}
	public function get()
	{
		$this->db->select('k.*,p.judul as judul, p.harga as harga');
		$this->db->from('keranjang k');
		$this->db->join('buku p', 'k.id_buku = p.id');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getById($id)
	{
		$this->db->from($this->table);
		$this->db->select('d.*,r.nama as nama, b.judul as judul');
		$this->db->from('detail_penjualan d');
		$this->db->join('user r', 'd.id_user = r.id');
		$this->db->join('buku b', 'd.id_buku = b.id');
		$this->db->where('d.no_penjualan', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getByUser($id)
	{
		$idu =  $this->session->userdata('id');
		$this->db->select('d.*,p.judul as judul');
		$this->db->from('detail_penjualan d');
		$this->db->join('buku p', 'd.id_buku = p.id');
		$this->db->where('d.no_penjualan', $id, 'AND d.id_user='.$idu);
		$this->db->where('d.id_user=', $idu);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function insert($data)
	{
		return $this->db->insert_batch($this->table, $data);
	}
	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
	public function delete($id)
	{
		$this->db->where($this->id, $id);
		$this->db->delete($this->table);
		return $this->db->affected_rows();
	}
	function charts()
    {
        $this->db->select('d.*, b.judul as buku, sum(d.jumlah) as jum');
        $this->db->from('detail_penjualan d');
        $this->db->join('buku b', 'd.id_buku = b.id');
        $this->db->group_by('d.id_buku');
        $query = $this->db->get();
        return $query->result_array();
    }
}