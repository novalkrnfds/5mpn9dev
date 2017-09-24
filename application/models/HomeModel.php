<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeModel extends CI_Model{

  public function __construct(){
    parent::__construct();
  }

   public function SelectAll(){
     $query = $this->db->get("tb_sambutan");
        return $query->result();
   }
  
  public function Sambutan(){
     $query = $this->db->get("tb_sambutan");
        return $query->result();
   }
   
   public function Berita(){
		$this->db->select('*');
		$this->db->from('tb_berita');
		$this->db->where('status','Terbit');
		$this->db->order_by('id', 'desc');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
   }
   
   public function Pengumuman(){
	   $tgl = date('Y-m-d');
		$this->db->select('*');
		$this->db->where('status','Terbit');
		$this->db->where('sampai >', $tgl);
		$this->db->limit(3);
		$this->db->from('tb_pengumuman');
		$query = $this->db->get();
		return $query->result();
   }
   


}
