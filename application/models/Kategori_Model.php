<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Kategori_Model extends CI_Model
{

	public function index()
	{
		return $this->db->get('kategori');
	}

	public function create($data)
	{
		if($this->db->insert('kategori', $data)){
			return true;
		}else{
			return false;
		}
	}

	public function delete($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}