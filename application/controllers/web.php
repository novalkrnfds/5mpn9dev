<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('Template');
		$this->load->Model('HomeModel', '', TRUE);
		$this->load->Model('GaleriModel', '', TRUE);
		$this->Template = new Template();
	}

	public function index(){
		$data['data']=$this->HomeModel->SelectAll();
		$data['berita']=$this->HomeModel->Berita();
		$data['pengumuman']=$this->HomeModel->Pengumuman();
		$this->template->display('Content/Home', $data);
	}

	public function galeri(){
		$data['galeri']=$this->GaleriModel->SelectAll();
		$this->template->display('Content/Galeri', $data);
	}

	public function visimisi(){
		$this->template->display('Content/Galeri');
	}

	public function kontak(){
		$this->template->display('Content/Kontak');
	}
}
