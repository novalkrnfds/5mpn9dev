<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Akademik extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('Template');
			$this->Template = new Template();
		}

		public function Agenda(){
			$this->Template->display('Content/Akademik/Agenda');
		}

	}
