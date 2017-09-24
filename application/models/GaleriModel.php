<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GaleriModel extends CI_Model{

  public function __construct(){
    parent::__construct();
  }

  public function SelectAll(){
    $query = $this->db->get("tb_gallery");
    return $query->result();
  }
}
