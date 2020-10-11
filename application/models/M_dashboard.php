<?php
class M_dashboard extends CI_Model
{
	function GetCatPC()
	{
		$cat_pc=$this->db->query("SELECT sum(product_stok) as stok from tbl_product where product_category = 'PC' order by product_nama");
		return $cat_pc;
	}

	function GetCatLaptop()
	{
		$cat_laptop=$this->db->query("SELECT sum(product_stok) as stok from tbl_product where product_category = 'Laptop' order by product_nama");
		return $cat_laptop;
	}

	function GetCatNotebook()
	{
		$cat_notebook=$this->db->query("SELECT sum(product_stok) as stok from tbl_product where product_category = 'Notebook' order by product_nama");
		return $cat_notebook;
	}

	function GetCatSmartphone()
	{
		$cat_smartphone=$this->db->query("SELECT sum(product_stok) as stok from tbl_product where product_category = 'Smartphone' order by product_nama");
		return $cat_smartphone;
	}

	function GetAll()
	{
		$all=$this->db->query("SELECT * from tbl_product");
		return $all;
	}
}