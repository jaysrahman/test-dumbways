<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['judul'] = 'Beranda';
		$data['menu'] = $this->db->get('menu')->result_array();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/beranda');
		$this->load->view('templates/footer');
	}

	public function soal1()
	{
		$data['judul'] = 'Soal 1';
		$data['menu'] = $this->db->get('menu')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('soal/1');
		$this->load->view('templates/footer');
	}

	public function soal2()
	{
		$data['judul'] = 'Soal 2';
		$data['menu'] = $this->db->get('menu')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('soal/2');
		$this->load->view('templates/footer');
	}
}
