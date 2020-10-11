<?php
class M_laporan extends CI_Model
{
	public function LaporanPDF()
	{
    		$stok=$this->db->query("
			select product_id, product_nama, product_category, product_harga, product_stok from tbl_product
			");
        return $stok;
    }

    public function LaporanPC()
	{
    	$stok_pc=$this->db->query("
			select product_id, product_nama, product_category, product_harga, product_stok from tbl_product where product_category = 'PC'
			");
        return $stok_pc;
    }

    public function LaporanLaptop()
	{
    	$stok_laptop=$this->db->query("
			select product_id, product_nama, product_category, product_harga, product_stok from tbl_product where product_category = 'Laptop'
			");
        return $stok_laptop;
    }

    public function LaporanNotebook()
	{
    	$stok_notebook=$this->db->query("
			select product_id, product_nama, product_category, product_harga, product_stok from tbl_product where product_category = 'Notebook'
			");
        return $stok_notebook;
    }

    public function LaporanSmartphone()
	{
    	$stok_smartphone=$this->db->query("
			select product_id, product_nama, product_category, product_harga, product_stok from tbl_product where product_category = 'Smartphone'
			");
        return $stok_smartphone;
    }
}