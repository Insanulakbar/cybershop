<?php
class M_users extends CI_Model
{
	function get_users()
	{
		$value=$this->db->query("SELECT * FROM users");
		return $value;
	}

	function save_users($nama,$username,$password,$level)
	{
		$value=$this->db->query("INSERT INTO tbl_users(user_nama,user_username,user_password,user_level) VALUES ('$nama','$username',md5('$password'),'$level')");
		return $value;
	}

	function update_users($kode,$nama,$username,$password,$level)
	{
		$value=$this->db->query("UPDATE tbl_users SET user_nama='$nama',user_username='$username',user_password=md5('$password'),user_level='$level' WHERE user_id='$kode'");
		return $value;
	}

	function delete_users($kode)
	{
		$value=$this->db->query("DELETE FROM users where id='$kode'");
		return $value;
	}
}