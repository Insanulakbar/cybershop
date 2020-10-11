<?php
class M_pembelian extends CI_Model
{

private $_table = "tbl_pembelian";

	function get_pembelian(){
		$value=$this->db->query("SELECT * from tbl_pembelian order by pembelian_id asc");
		return $value;
	}
	
	function simpan_pembelian($namapembelian,$category,$kuantitas)
	{
		$user_id=$this->session->userdata('idadmin');
		$value=$this->db->query("INSERT INTO tbl_pembelian (pembelian_nama,pembelian_category,pembelian_kuantitas) VALUES ('$namapembelian','$category','$kuantitas')");
		return $value;
	}
	
	function update_pembelian($id,$namapembelian,$category,$kuantitas){
		$user_id=$this->session->userdata('idadmin');
		$value=$this->db->query("UPDATE tbl_pembelian SET pembelian_nama='$namapembelian',pembelian_category='$category',pembelian_kuantitas='$kuantitas' WHERE pembelian_id='$id'");
		return $value;
	}
	
	function delete_pembelian($id){
		$value=$this->db->query("DELETE FROM tbl_pembelian where pembelian_id='$id'");
		return $value;
	}
}