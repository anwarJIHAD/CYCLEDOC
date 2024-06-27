<?php
defined('BASEPATH') or exit('No direct script access allowed');
class datasensor_cycledoc_M extends CI_Model
{
	public $table = 'datasensor_cycledoc';
	// public $table2 = 'pmi_pendukung';
	public $id = 'datasensor_cycledoc.id';
	public function __construct()
	{
		parent::__construct();
	}
	public function get()
	{
		$this->db->from($this->table);
		$query = $this->db->get();
		$this->db->order_by('date_create', 'desc');
		$result = $query->result_array();
		if (empty($result)) {
			return [];
		}

		return $result;
	}
	public function getById($id)
	{
		$this->db->from($this->table);
		$this->db->where('id', $id);
		$this->db->order_by('date_create', 'desc');
		$query = $this->db->get();
		return $query->row_array();
	}
	public function insert($data)
	{
		return $this->db->insert_batch($this->table, $data);
	}
	public function get_routes()
	{
		$this->db->select('*');
		$this->db->from('datasensor_cycledoc');
		$this->db->where('sign', 'start');
		$query = $this->db->get();
		return $query->result();
	}


}
