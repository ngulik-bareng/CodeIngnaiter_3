<?php
require_once 'Base_model.php';

class Buku_model extends Base_Model{
    //nama tabel
    var $table = "tbl_buku";

    public function find_all(){
        return $this->db->query("SELECT tbl_buku.*,tbl_penerbit.nama as nama_penerbit
        FROM tbl_buku 
        INNER JOIN tbl_penerbit ON tbl_penerbit.id = tbl_buku.id_penerbit")->result_array();
    }

    public function find_by_id($id){
        return $this->db->query("SELECT tbl_buku.*,tbl_penerbit.nama as nama_penerbit 
        FROM tbl_buku 
        INNER JOIN tbl_penerbit ON tbl_penerbit.id = tbl_buku.id_penerbit 
        WHERE tbl_buku.id='$id'")->row_array();
    }

}