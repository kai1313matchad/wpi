<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_meta extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
			$this->table='meta_tag';
		}

		public function insert_meta($table,$data)
		{
			$this->db->insert($this->table,$data);
			if($this->db->affected_rows())
			{
				return '1';
			}
			else
			{
				return '0';
			}
		}

		//get edit data
		public function get_edit_data($table,$id_table,$id)
		{
			$que=$this->db->get_where($table,array($id_table=>$id));
			return $que->row_array();
		}

		public function select_meta($id = NULL)
		{
			$this->db->where('meta_id',$id);
			$que=$this->db->get($this->table);
			return $que->row_array();
		}

		public function edit_meta($id)
		{		
			$que=$this->db->get_where($this->table,array('meta_id'=>$id));
			return $que->row_array();
		}

		public function update_meta($data,$id)
		{
			$this->db->where('meta_id',$id);
			$this->db->update($this->table,$data);
			if ($this->db->affected_rows())
			{
				return '1';
			}
			else
			{
				return '0';
			}
		}

		public function delete_meta($id)
		{
			$this->db->where('meta_id',$id);
			$this->db->delete($this->table);
		}

		public function count_row_meta()
		{
			$que=$this->db->get($this->table);
			return $que->num_rows();
		}

		public function get_meta_data($limit,$start,$srch = NULL)
		{
			if($srch == "NULL") $srch = "";
			$sql = "SELECT * FROM meta_tag WHERE meta_keyword LIKE '%$srch%' ORDER BY meta_id DESC LIMIT " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function update_data($table,$id,$id_table,$data)
		{
			$this->db->where($id_table,$id);
			$this->db->update($table,$data);
			if ($this->db->affected_rows())
			{
				return '1';
			}
			else
			{
				return '0';
			}
		}

		public function delete_data($table,$id,$id_table)
		{
			$this->db->where($id_table,$id);
			$this->db->delete($table);
		}

		public function count_meta($srch = NULL)
		{
			if ($srch == 'NULL') $srch = '';
			$this->db->like('nama',$srch);
			$que = $this->db->get('meta_tag');
			return $que->num_rows();
		}

		public function get_srch_pag_data($table,$order,$spe,$limit,$start,$srch = NULL)
		{
			if($srch == "NULL") $srch = "";
			$sql = "SELECT * FROM ".$table." WHERE ".$spe." LIKE '%$srch%' ORDER BY ".$order." DESC LIMIT " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function count_pagdata($table,$spe,$srch = NULL)
		{
			if ($srch == 'NULL') $srch = '';
			$this->db->like($spe,$srch);
			$que = $this->db->get($table);
			return $que->num_rows();
		}
	}
?>