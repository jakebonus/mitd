<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_admin extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function m_save_service($data) {
		if($this->db->insert('tbl_services',$data)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}


	public function m_get_personnel() {

		$sql = "SELECT
							CONCAT(`p_fname`,' ',`p_mi`,' ',`p_lname`,' ',`p_next`) AS `personnel`
						FROM `tbl_personnel`
						WHERE `p_active` = 'YES'";

		$query = $this->db->query($sql);

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}


	public function m_get_office() {

		$sql = "SELECT
							`o_id`,
							`o_name` AS `officename`,
							`o_code` AS `code`,
							`o_telnum`
						FROM
							`tbl_office`
						WHERE
							`o_isactive` = 'YES'";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}


}
