<?php
class M_login extends CI_Model
{
    function cekadmin($u,$p)
    {
        $hasil=$this->db->query("select*from tbl_users where user_username='$u'and user_password=md5('$p')");
        return $hasil;
    }  
}
