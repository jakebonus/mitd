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

	public function m_save_computer($data) {
		if($this->db->insert('tbl_computers',$data)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function m_save_pc_specs($data) {
		if($this->db->insert('tbl_specs',$data)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function m_save_project($data) {
		if($this->db->insert('tbl_projects',$data)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}


	public function m_get_personnel($is_software) {

		$sql = "SELECT
							*,
							CONCAT(`p_fname`,' ',`p_mi`,' ',`p_lname`,' ',`p_next`) AS `personnel`
						FROM `tbl_personnel`
						WHERE `p_active` = 'YES'";
		// if($is_software == 'yes'){
		// 	$sql .= " AND `p_section` = 'SOFTWARE'";
		// }


		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function m_get_id($c_propertycode) {
		$sql = "SELECT
							*
						FROM `tbl_computers`
						WHERE `c_propertycode` = '$c_propertycode'";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function m_get_processor() {

		$sql = "SELECT
							distinct(`c_prosmodel`) as `proscessor`
						FROM `tbl_computers`
						WHERE `c_deleted` = 'NO'";

		$query = $this->db->query($sql);

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function m_get_os() {

		$sql = "SELECT
							distinct(`c_os`) as `os`
						FROM `tbl_computers`
						WHERE `c_deleted` = 'NO'";

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

	public function m_get_personnelmonitoring() {
		$date = date('Y-m-d');
		$sql = "SELECT
							`a`.*,
							`b`.`p_nickname`
						FROM
							`tbl_services` `a`
						INNER JOIN `tbl_personnel` `b` ON
							`b`.`p_id` = `a`.`p_id`
						WHERE
							`s_deleted` = 'NO'
							AND
							`s_date` = '$date'
							AND
							`s_ongoing` = 'YES'
							";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function m_get_services() {
		$date = date('Y-m-d');
		$sql = "SELECT
							*
						FROM
							`tbl_services`
						WHERE
							`s_deleted` = 'NO'
							AND
							`s_date` = '$date'
							AND
							`s_ongoing` = 'YES'";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function m_get_complist($ftr) {
		$this->db->select('*');
		$this->db->from('tbl_computers');

		if($ftr['ftr_office'] != '' || $ftr['ftr_office'] != null){
					$this->db->where('c_office',$ftr['ftr_office']);
		}

		if($ftr['ftr_type'] != '' || $ftr['ftr_type'] != null){
					$this->db->where('c_type',$ftr['ftr_type']);
		}

		if($ftr['ftr_propertycode'] != '' || $ftr['ftr_propertycode'] != null){
					$this->db->where('c_propertycode',$ftr['ftr_propertycode']);
		}

		if($ftr['ftr_isonum'] != '' || $ftr['ftr_isonum'] != null){
					$this->db->where('c_isonum',$ftr['ftr_isonum']);
		}

		// if($ftr['ftr_processor'] != '' || $ftr['ftr_processor'] != null){
		// 			$this->db->where('c_prosmodel',$ftr['ftr_processor']);
		// }

		if($ftr['ftr_condemn'] != '' || $ftr['ftr_condemn'] != null){
					$this->db->where('c_iscondemn',$ftr['ftr_condemn']);
		}

		// if($ftr['ftr_os'] != '' || $ftr['ftr_os'] != null){
		// 			$this->db->where('c_os',$ftr['ftr_os']);
		// }

		$this->db->where('c_deleted','NO');

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function m_update_service($s_id,$data) {
				$this->db->where('s_id', $s_id);
		if($this->db->update('tbl_services',$data)) {
			return TRUE;
		} else {
			return false;
		}
	}

	public function m_get_pcdetails($id) {
		$sql = "SELECT * FROM `tbl_specs` WHERE `id`=$id AND `deleted` = 'NO'";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function m_get_computers() {
		$sql = "SELECT * FROM `tbl_computers` WHERE `c_deleted` = 'NO' AND `c_iscondemn` = 'NO'";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function m_get_pcspecs($c_id) {
		$sql = "SELECT
								*,
								`type`,
						GROUP_CONCAT(`model`,' ',`brand`,' ',`remarks`) AS `specs`
						from `tbl_specs`
						WHERE  `c_id` = '$c_id'
						 GROUP BY `type`";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function m_get_pcinfo($c_id) {
		$sql = "SELECT * FROM `tbl_computers` WHERE  `c_id` = '$c_id'";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function m_check_propertycode($propertycode) {
		$sql = "SELECT * FROM `tbl_computers` WHERE  `c_propertycode` = '$propertycode'";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function m_get_unithistory($propcode) {
		$sql = "SELECT * FROM `tbl_services` WHERE  `c_propertycode` = '$propcode'";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function m_get_projects() {
		$sql = "SELECT * FROM `tbl_projects` WHERE `status` != 'DEPLOYED' AND `deleted` = 'NO';";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function m_update_computer($c_id,$data) {
				$this->db->where('`c_id`', $c_id);
		if($this->db->update('`tbl_computers`',$data)) {
			return TRUE;
		} else {
			return false;
		}
	}

	public function m_update_pc_specs($id,$data) {
				$this->db->where('`id`', $id);
		if($this->db->update('`tbl_specs`',$data)) {
			return TRUE;
		} else {
			return false;
		}
	}

	public function m_update_project($id,$data) {
				$this->db->where('`id`', $id);
		if($this->db->update('`tbl_projects`',$data)) {
			return TRUE;
		} else {
			return false;
		}
	}

	public function m_update_personnel($p_id,$data) {
				$this->db->where('`p_id`', $p_id);
		if($this->db->update('`tbl_personnel`',$data)) {
			return TRUE;
		} else {
			return false;
		}
	}

	public function m_save_personnel($data) {
		if($this->db->insert('tbl_personnel',$data)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}


}
