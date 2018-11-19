<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_banner extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
			$this->table='banner';
		}

		public function insert_banner($data)
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

		public function select_banner($id = NULL)
		{
			$this->db->where('id_banner',$id);
			$que=$this->db->get($this->table);
			return $que->row_array();
		}

		public function edit_banner($id)
		{		
			$que=$this->db->get_where($this->table,array('id_banner'=>$id));
			return $que->row_array();
		}

		public function update_banner($data,$id)
		{
			$this->db->where('id_banner',$id);
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

		public function delete_banner($id)
		{
			$this->db->where('id_banner',$id);
			$this->db->delete($this->table);
		}

		public function count_row_banner()
		{
			$que=$this->db->get($this->table);
			return $que->num_rows();
		}

		public function get_banner_data($limit,$start,$srch = NULL)
		{
			if($srch == "NULL") $srch = "";
			$sql = "SELECT * FROM banner WHERE nama_banner LIKE '%$srch%' ORDER BY id_banner DESC LIMIT " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function count_banner($srch = NULL)
		{
			if ($srch == 'NULL') $srch = '';
			$this->db->like('nama_banner',$srch);
			$que = $this->db->get('banner');
			return $que->num_rows();
		}
	}
?>