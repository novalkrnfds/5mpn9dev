<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('Template');
		$this->Template = new Template();
	}

	public function Struktur_organisasi(){
		$this->Template->display('Content/Profil/Struktur');
	}

	public function Visimisi(){
		$this->Template->display('Content/Profil/Visimisi');
	}

	public function Prestasi(){
		$this->Template->display('Content/Profil/Prestasi');
	}

	public function Sejarah(){
		$this->Template->display('Content/Profil/Sejarah');
	}

	public function Sarana_Prasarana(){
		$this->Template->display('Content/Profil/Sarana');
	}

	public function Saranaprasarana2(){
		$this->Template->display('Content/Profil/Saranaprasarana2');
	}
}
