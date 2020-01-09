<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cMhs extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mMhs');
	}

	public function index()
	{
		$data['tabTitle'] = 'MAHASISWA';
		$data['mahasiswa'] = $this->mMhs->getAll();

		$this->load->view('Template/header', $data);
		$this->load->view('Mhs/list', $data);
		$this->load->view('Template/footer');
	}

	public function showAddForm()
	{
		$data['tabTitle'] = 'MAHASISWA';
		$data['pageTitle'] = 'Tambah Data Mahasiswa';

		$this->load->view('Template/header', $data);
		$this->load->view('Mhs/add', $data);
		$this->load->view('Template/footer');
	}

	public function addItem()
	{
		$data = [
			'name'       => $this->input->post("name"),
			'nim'         => $this->input->post("nim"),
			'jurusan'    => $this->input->post("jurusan"),
			'prodi'         => $this->input->post("prodi"),
			'kelas'         => $this->input->post("kelas")
		];

		$queryResult = $this->mMhs->addItem($data);

		$flashName = 'mhs_flash';
		$msg = '';
		$alertClass = '';
		$redirect = 'cMhs';
		if ($queryResult) {
			$msg = 'DATA <strong>BERHASIL</strong> DITAMBAHKAN!';
			$alertClass = 'alert alert-success mhs_alert';
		} else {
			$msg = 'DATA <strong>GAGAL</strong> DITAMBAHKAN!';
			$alertClass = 'alert alert-danger mhs_alert';
		}
		$this->session->set_flashdata($flashName, '<div class="' . $alertClass . '" role="alert">' . $msg . '</div>');
		redirect($redirect);
	}

	public function showEditForm()
	{
		$data['tabTitle'] = 'MAHASISWA';
		$data['pageTitle'] = 'EDIT';
		$data['mahasiswa'] = $this->mMhs->getItemById();

		$this->load->view('Template/header', $data);
		$this->load->view('Mhs/edit', $data);
		$this->load->view('Template/footer');
	}

	function editItem()
	{
		$queryResult = $this->mMhs->editItem();

		$flashName = 'mhs_flash';
		$msg = '';
		$alertClass = '';
		$redirect = 'cMhs';
		if ($queryResult) {
			$msg = 'DATA <strong>BERHASIL</strong> DITAMBAHKAN!';
			$alertClass = 'alert alert-success mhs_alert';
		} else {
			$msg = 'DATA <strong>GAGAL</strong> DITAMBAHKAN!';
			$alertClass = 'alert alert-danger mhs_alert';
		}
		$this->session->set_flashdata($flashName, '<div class="' . $alertClass . '" role="alert">' . $msg . '</div>');
		redirect($redirect);
	}

	function deleteItem()
	{
		$this->mMhs->deleteItem();
		redirect('cMhs');
	}

	public function showDetail()
	{
		$data['tabTitle'] = 'MAHASISWA';
		$data['pageTitle'] = 'DETAIL';
		$data['mahasiswa'] = $this->mMhs->getItemById();

		$this->load->view('Template/header', $data);
		$this->load->view('Mhs/detail', $data);
		$this->load->view('Template/footer');
	}

	public function Detail()
	{
		redirect('cMhs');
	}
}
