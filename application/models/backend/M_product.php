<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_product extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
			$this->table='products';
		}

		public function insert_product($data)
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

		public function select_product($id = NULL)
		{
			$this->db->where('id_product',$id);
			$que=$this->db->get($this->table);
			return $que->row_array();
		}

		public function edit_product($id)
		{		
			$que=$this->db->get_where($this->table,array('id_product'=>$id));
			return $que->row_array();
		}

		public function update_product($data,$id)
		{
			$this->db->where('id_product',$id);
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

		public function delete_product($id)
		{
			$this->db->where('id_product',$id);
			$this->db->delete($this->table);
		}

		public function count_row_product()
		{
			$que=$this->db->get($this->table);
			return $que->num_rows();
		}

		public function get_product_data($limit,$start,$srch = NULL)
		{
			if($srch == "NULL") $srch = "";
			$sql = "SELECT * FROM products WHERE nama_product LIKE '%$srch%' ORDER BY id_product DESC LIMIT " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function count_product($srch = NULL)
		{
			if ($srch == 'NULL') $srch = '';
			$this->db->like('nama_product',$srch);
			$que = $this->db->get('products');
			return $que->num_rows();
		}
	}
?>