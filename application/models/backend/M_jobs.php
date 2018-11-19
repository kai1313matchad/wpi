<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_jobs extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}

		public function insert_job($data)
		{
			$this->db->insert('jobs',$data);
			if($this->db->affected_rows())
			{
				return '1';
			}
			else
			{
				return '0';
			}
		}

		public function select_job($id = NULL)
		{
			$this->db->where('id_job',$id);
			$que = $this->db->get('jobs');
			return $que->row_array();
		}

		public function update_job($data,$id)
		{
			$this->db->where('id_job',$id);
			$this->db->update('jobs',$data);
			if ($this->db->affected_rows())
			{
				return '1';
			}
			else
			{
				return '0';
			}
		}

		public function delete_job($id)
		{
			$this->db->where('id_job',$id);
			$this->db->delete('jobs');
		}

		public function count_row_jobs()
		{
			$que=$this->db->get('jobs');
			return $que->num_rows();
		}

		public function get_jobs_data($limit,$start,$srch = NULL)
		{
			if($srch == "NULL") $srch = "";
			$sql = "SELECT * FROM jobs WHERE judul_job LIKE '%$srch%' ORDER BY id_job DESC LIMIT " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function count_jobs($srch = NULL)
		{
			if ($srch == 'NULL') $srch = '';
			$this->db->like('judul_job',$srch);
			$que = $this->db->get('jobs');
			return $que->num_rows();
		}
	}
?>