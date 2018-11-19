<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_clients extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
			$this->table='clients';
		}

		public function insert_clients($data)
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

		public function select_clients($id = NULL)
		{
			$this->db->where('id_client',$id);
			$que=$this->db->get($this->table);
			return $que->row_array();
		}

		public function edit_clients($id)
		{		
			$que=$this->db->get_where($this->table,array('id_client'=>$id));
			return $que->row_array();
		}

		public function update_clients($data,$id)
		{
			$this->db->where('id_client',$id);
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

		public function delete_clients($id)
		{
			$this->db->where('id_client',$id);
			$this->db->delete($this->table);
		}

		public function count_row_clients()
		{
			$que=$this->db->get($this->table);
			return $que->num_rows();
		}

		public function get_clients_data($limit,$start,$srch = NULL)
		{
			if($srch == "NULL") $srch = "";
			$sql = "SELECT * FROM clients WHERE nama LIKE '%$srch%' ORDER BY id_client DESC LIMIT " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function count_clients($srch = NULL)
		{
			if ($srch == 'NULL') $srch = '';
			$this->db->like('nama',$srch);
			$que = $this->db->get('clients');
			return $que->num_rows();
		}
	}
?>