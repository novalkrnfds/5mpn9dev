<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template{
	protected $_ci;
	
	function __construct(){
		$this->_ci = &get_instance();
	}
	
	function display($content, $data = null){
		$data['header'] = $this->_ci->load->view('Templates/Nav', $data, true);
		$data['content'] = $this->_ci->load->view($content, $data, true);
		$data['footer'] = $this->_ci->load->view('Templates/Footer', $data, true);
		
		$this->_ci->load->view('Templates/Home', $data);
	}
}
