<?php
class M_transaksi extends CI_Model
{
	function GetTransaksi($product_name)
	{
		$transaksi=$this->db->query("SELECT * from tbl_product where product_nama = '$product_name'");
		return $transaksi;
	}
}