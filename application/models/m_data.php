<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');
class M_data extends CI_Model
{
	public function tampil_data()
	{
		$query = $this->db->order_by('id_buku','DESC')->get('buku');
		return $query->result();
	}
}