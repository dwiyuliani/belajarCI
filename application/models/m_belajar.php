<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_belajar extends CI_Model {

	public function __construct(){ 
		parent::__construct();
	}

	
	public function input_data($tabel,$data)
	{
		$this->db->insert($tabel,$data);
	}

	public function tampil_data()
	{
		return $this->db->get('user');
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function do_update_data($where,$data,$table)
	{
	         $this->db->where($where);
	         $this->db->update($table,$data);
	 } 
}
