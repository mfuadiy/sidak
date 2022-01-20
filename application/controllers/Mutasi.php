<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mutasi extends CI_Controller 
{

		public function __construct()
	{
		parent::__construct();
		//is_logged_in();
		if(!$this->session->userdata('email')){
			redirect('auth');
		}
		$this->load->model('Peoples_model');
		$this->load->library('form_validation');
	}


	public function data_mutasi($npk)
	{

		$data['title'] 	= 'Mutasi';
		$data['judul'] = 'Mutasi';
		$data['user'] 	= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$role_user = $data['user']['role_id'];

		if($role_user == 3){
			redirect('auth/blocked');
		}

		$data['alldata'] = $this->Peoples_model->getAllDataById($npk);
		$data['peoples'] = $this->Peoples_model->getPeoplesById($npk);
		$data['ahli_waris'] = $this->Peoples_model->getAhliWarisById($npk);
		$data['detail'] = $this->Peoples_model->getDetailById($npk);
		$data['temp'] = $this->Peoples_model->getAllTempDataById($npk);

		$data['jk'] = $this->db->get('jk')->result_array();
		$data['agama'] = $this->db->get('agama')->result_array();
		$data['cabang'] = $this->db->get('cabang')->result_array();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('mutasi/data_mutasi', $data);
		$this->load->view('templates/footer');
	}
}