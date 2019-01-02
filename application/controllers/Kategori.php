<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_Model');
	}

	public function index()
	{
		$data =
		[
			'title' => 'Dashboard',
			'sub_title' => 'Kategori',
			'show' => $this->Kategori_Model->index()->result(),
			'content' => 'kategori/index'
		];
		$this->load->view('template/my_template', $data);
	}

	public function add()
	{
		$data =
		[
			'title' => 'Kategori',
			'sub_title' => 'Tambah Kategori',
			'content' => 'kategori/add',
		];
		$this->load->view('template/my_template', $data);
	}

	public function create()
	{

		$nama_kategori = $this->input->post('nama_kategori');

		$data = array(
			'nama_kategori' => $nama_kategori,

		);

		$create = $this->Kategori_Model->create($data);

		if($create){
		$this->session->set_flashdata('pesan_create', true);
		redirect('kategori');
		}else{
		$this->session->set_flashdata('pesan_create', false);
		redirect('kategori');
		}
	}

	public function delete($id_kategori)
	{
		$where = array('id_kategori => $id_kategori');
		$this->Kategori_Model->delete($where,'kategori');
		redirect('kategori/index');
	}
}