<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}

	function tambah(){
		$this->load->view('test');
	}

	function tambah_aksi(){
		$user_id = $this->input->post('user_id');
		$nama_depan = $this->input->post('nama_depan');
		$nama_belakang = $this->input->post('nama_belakang');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$no_telp = $this->input->post('no_telp');
		$tgl_masuk = $this->input->post('tgl_masuk');

		$data = array(
			'user_id' => $user_id,
			'nama_depan' => $nama_depan,
			'nama_belakang' => $nama_belakang,
			'username' => $username,
			'password' => $password,
			'email' => $email,
			'no_hp' => $no_telp,
			'tgl_masuk' => $tgl_masuk
			);
		$this->m_data->input_data($data,'user');
		redirect('test');
	}

	function edit($id){
		$where = array('user_id' => $id);
		$data['user'] = $this->m_data->edit_data($where,'user')->result();
		$this->load->view('v_edit',$data);
	}

	function hapus($id){
		$where = array('user_id' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('test/');
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

		$this->m_data->update_data($where,$data,'user');
		redirect('crud/index');
	}

}

/* End of file Test.php */
/* Location: ./application/controllers/Test.php */

