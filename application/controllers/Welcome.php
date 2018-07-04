<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
				$this->load->database();
		
		$this->load->model('m_belajar');
		$this->load->helper('url');
	}
	public function index()
	{
		$data['user']=$this->m_belajar->tampil_data()->result();
		$this->load->view('welcome_message',$data);
	}
	public function tambahData()
	{
		$this->load->view('tambahData');
	}

	public function doTambahData(){
		$nama=$this->input->post('nama');
		$pekerjaan=$this->input->post('pekerjaan');
		$alamat=$this->input->post('alamat');

		$data = array(
				'nama' => $nama,
				'alamat'=>$alamat,
				'pekerjaan'=> $pekerjaan
				);

		$this->m_belajar->input_data('user',$data);
		redirect('lihat');
	}

	public function hapus(){
		$id 	= $this->uri->segment('2');
		$where = array('id' => $id);
		$this->m_belajar->hapus_data($where,'user');
		redirect('lihat');
	}

	function edit(){
		$id 	= $this->uri->segment('2');
		$where = array('id' => $id);
		$data['user'] = $this->m_belajar->edit_data($where,'user')->result();
		$this->load->view('v_edit',$data);
	}

	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
		);

		$where = array(
			'id' => $id
		);

		$this->m_belajar->do_update_data($where,$data,'user');
		redirect('lihat');
	}
}
