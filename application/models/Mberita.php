<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mberita extends CI_Model{

  public function __construct(){
    parent::__construct();
  }

  public function Ambil_berita(){
	  $where = "status='Terbit'";
		$this->db->where($where);
		$this->db->order_by('id', 'desc');
		return $this->db->get('tb_berita');
  }

  public function count_berita() {
        return $this->db->count_all("tb_berita");
    }

  public function fetch_berita($limit, $start) {
	    $where = "status='Terbit'";
        $this->db->limit($limit, $start);
		$this->db->order_by('id', 'desc');
		$this->db->where($where);
        $query = $this->db->get("tb_berita");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   
   public function ambilBeritaID($id){
    $this->db->select('*');
	$this->db->where('id', $id);
	$q = $this->db->get('tb_berita');
	// if id is unique, we want to return just one row
	return $data = array_shift($q->result_array());
   }
}
