<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('Template', 'pagination');
		$this->load->Model('MBerita', '', TRUE);
		$this->Template = new Template();
	}

	public function index(){


		$config['num_links'] = 7;

		$config['display_pages'] = TRUE;
		$config['use_page_numbers'] = TRUE;

		//Encapsulate whole pagination
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		//First link of pagination
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>>';
		$config['first_tag_close'] = '</li>';

		//Customizing the “Digit” Link
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		//For PREVIOUS PAGE Setup
		$config['prev_link'] = '<';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';

		//For NEXT PAGE Setup
		$config['next_link'] = '>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';

		//For LAST PAGE Setup
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		//For CURRENT page on which you are
		$config['cur_tag_open'] = '<li><a class="current">';
		$config['cur_tag_close'] = '</a></li>';



		$config["base_url"] = base_url() . "Berita/index";
		$config["total_rows"] = $this->MBerita->count_berita();
		$config["per_page"] = 5;
		$config["uri_segment"] = 3;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = round($choice);

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
		$data["results"] = $this->MBerita
			->fetch_berita($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();

		$this->Template->display('Content/Berita/Berita', $data);
	}

	public function Detail(){
		$id= $this->uri->segment(3);
		$data['berita'] = $this->MBerita->ambilBeritaID($id);

		$this->template->display('Content/Berita/Detail', $data);
	}




}
