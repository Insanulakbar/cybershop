<?php
class M_product extends CI_Model
{

private $_table = "tbl_product";

	function get_product(){
		$value=$this->db->query("SELECT * from tbl_product order by product_id asc");
		return $value;
	}
	
	function get_kodeproduct()
	{
		$q = $this->db->query("SELECT MAX(RIGHT(product_id,4)) AS kd_max FROM tbl_product");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        return "BB".$kd;
	}
	
	function simpan_product($kodeproduct,$namaproduct,$category,$harga,$stok)
	{
		$user_id=$this->session->userdata('idadmin');
		$value=$this->db->query("INSERT INTO tbl_product (product_id,product_nama,product_category,product_harga,product_stok) VALUES ('$kodeproduct','$namaproduct','$category','$harga','$stok')");
		return $value;
	}
	
	function update_product($kodeproduct,$namaproduct,$category,$harga,$stok){
		$user_id=$this->session->userdata('idadmin');
		$value=$this->db->query("UPDATE tbl_product SET product_nama='$namaproduct',product_category='$category',product_harga='$harga',product_stok='$stok' WHERE product_id='$kodeproduct'");
		return $value;
	}
	
	function delete_product($id){
		$value=$this->db->query("DELETE FROM tbl_product where product_id='$id'");
		return $value;
	}
}