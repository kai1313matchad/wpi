<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_applicant extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}		

		function select_applicant()
		{
			$que = $this->db->get('career_apply');
			return $que->result_array();
		}

		public function delete_applicant($id)
		{
			$this->db->where('id_apply',$id);
			$this->db->delete('career_apply');
		}

		public function count_row_applicant()
		{
			$que=$this->db->get('career_apply');
			return $que->num_rows();
		}

		public function get_applicant_data($limit,$start,$srch = NULL)
		{
			if($srch == "NULL") $srch = "";
			$sql = "SELECT * FROM career_apply WHERE judul_job LIKE '%$srch%' ORDER BY id_apply DESC LIMIT " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function count_applicant($srch = NULL)
		{
			if ($srch == 'NULL') $srch = '';
			$this->db->like('judul_job',$srch);
			$que = $this->db->get('career_apply');
			return $que->num_rows();
		}
	}
?>