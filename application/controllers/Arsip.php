<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH .'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;
class Arsip extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//is_logged_in();
		if(!$this->session->userdata('email')){
			redirect('auth');
		}
		//$this->load->model('Peoples_model');
		$this->load->library('form_validation');
	}

	public function scan()
	{
		$data['title'] 	= 'Scan QR Code';
		$data['judul'] 	= 'Arsip Kepesertaan';
		$data['user'] 	= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$role_user = $data['user']['role_id'];

		if($role_user == 3){
			redirect('auth/blocked');
		}

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('arsip/scan', $data);
		$this->load->view('templates/footer');
	}

}