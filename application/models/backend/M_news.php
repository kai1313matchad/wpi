<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_news extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
			$this->table='news';
		}

		public function insert_news($data)
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

		public function select_news($id = NULL)
		{
			$this->db->where('id_news',$id);
			$que = $this->db->get('news');
			return $que->row_array();
		}

		public function update_news($data,$id)
		{
			$this->db->where('id_news',$id);
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

		public function delete_news($id)
		{
			$this->db->where('id_news',$id);
			$this->db->delete($this->table);
		}

		public function count_row_news()
		{
			$que=$this->db->get($this->table);
			return $que->num_rows();
		}

		public function get_news_data($limit,$start,$srch = NULL)
		{
			if($srch == "NULL") $srch = "";
			$sql = "SELECT * FROM news WHERE judul_news LIKE '%$srch%' ORDER BY id_news DESC LIMIT " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function count_news($srch = NULL)
		{
			if ($srch == 'NULL') $srch = '';
			$this->db->like('judul_news',$srch);
			$que = $this->db->get('news');
			return $que->num_rows();
		}
	}
?>