<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_dash extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function select_banner()
		{
			$que = $this->db->get('banner');
			return $que->result();
		}

		public function select_clients()
		{
			$que = $this->db->get('clients');
			return $que->result();
		}

		public function count_banner()
		{
			$que=$this->db->get('banner');
			return $que->num_rows();
		}

		public function select_last_news()
		{
			$this->db->limit(8);
			$this->db->order_by('id_news', 'DESC');
			$que=$this->db->get('news');
			return $que->result();
		}

		public function select_last_products()
		{
			$this->db->limit(6);
			$this->db->order_by('id_product', 'DESC');
			$que=$this->db->get('products');
			return $que->result();
		}

		public function select_last_jpo()
		{
			$this->db->limit(1);
			$this->db->order_by('id_product', 'DESC');
			$que=$this->db->get_where('products', array('kategori_product'=>'JPO (Jembatan Penyebrangan Orang)'));
			return $que->row_array();
		}

		public function select_last_pos()
		{
			$this->db->limit(1);
			$this->db->order_by('id_product', 'DESC');
			$que=$this->db->get_where('products', array('kategori_product'=>'Pos Security'));
			return $que->row_array();
		}

		public function select_last_shelter()
		{
			$this->db->limit(1);
			$this->db->order_by('id_product', 'DESC');
			$que=$this->db->get_where('products', array('kategori_product'=>'Shelter Bus'));
			return $que->row_array();
		}

		public function select_last_sipil()
		{
			$this->db->limit(1);
			$this->db->order_by('id_product', 'DESC');
			$que=$this->db->get_where('products', array('kategori_product'=>'Pekerjaan Sipil'));
			return $que->row_array();
		}

		public function select_last_baja()
		{
			$this->db->limit(1);
			$this->db->order_by('id_product', 'DESC');
			$que=$this->db->get_where('products', array('kategori_product'=>'Konstruksi Baja'));
			return $que->row_array();
		}

		public function select_last_gudang()
		{
			$this->db->limit(1);
			$this->db->order_by('id_product', 'DESC');
			$que=$this->db->get_where('products', array('kategori_product'=>'Konstruksi Gudang'));
			return $que->row_array();
		}

		public function select_last_rumah()
		{
			$this->db->limit(1);
			$this->db->order_by('id_product', 'DESC');
			$que=$this->db->get_where('products', array('kategori_product'=>'Konstruksi Rumah'));
			return $que->row_array();
		}

		public function select_last_renov()
		{
			$this->db->limit(1);
			$this->db->order_by('id_product', 'DESC');
			$que=$this->db->get_where('products', array('kategori_product'=>'Renovasi Rumah'));
			return $que->row_array();
		}

		public function select_last_cat()
		{
			$this->db->limit(1);
			$this->db->order_by('id_product', 'DESC');
			$que=$this->db->get_where('products', array('kategori_product'=>'Pengecatan Rumah'));
			return $que->row_array();
		}			

		public function select_news_read($id)
		{
			$que=$this->db->get_where('news', array('id_news'=>$id));
			return $que->row_array();
		}

		public function get_newslist_data($limit,$start,$srch = NULL)
		{
			if($srch == "NULL") $srch = "";
			$sql = "SELECT * FROM news WHERE judul_news LIKE '%$srch%' ORDER BY id_news DESC LIMIT " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function count_newslist($srch = NULL)
		{
			if ($srch == 'NULL') $srch = '';
			$this->db->like('judul_news',$srch);
			$que = $this->db->get('news');
			return $que->num_rows();
		}

		public function get_careerlist_data($limit,$start,$srch = NULL)
		{
			if($srch == "NULL") $srch = "";
			$sql = "SELECT * FROM jobs WHERE judul_job LIKE '%$srch%' ORDER BY id_job DESC LIMIT " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function count_careerlist($srch = NULL)
		{
			if ($srch == 'NULL') $srch = '';
			$this->db->like('judul_job',$srch);
			$que = $this->db->get('jobs');
			return $que->num_rows();
		}

		public function select_career_details($id)
		{
			$que=$this->db->get_where('jobs', array('id_job'=>$id));
			return $que->row_array();
		}

		public function insert_career($data)
		{
			$this->db->insert('career_apply',$data);
			if($this->db->affected_rows())
			{
				return '1';
			}
			else
			{
				return '0';
			}
		}

		public function count_gallery_jpo()
		{
			$que = $this->db->get_where('products', array('kategori_product'=>'JPO (Jembatan Penyebrangan Orang)'));
			return $que->num_rows();
		}

		public function get_gallery_jpo($limit,$start,$srch = NULL)
		{
			if($srch == "NULL") $srch = "";
			$sql = "SELECT * FROM products WHERE kategori_product LIKE '%$srch%' ORDER BY id_product DESC LIMIT " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function count_gallery_pos()
		{
			$que = $this->db->get_where('products', array('kategori_product'=>'Pos Security'));
			return $que->num_rows();
		}

		public function get_gallery_pos($limit,$start,$srch = NULL)
		{
			if($srch == "NULL") $srch = "";
			$sql = "SELECT * FROM products WHERE kategori_product LIKE '%$srch%' ORDER BY id_product DESC LIMIT " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function count_gallery_shelter()
		{
			$que = $this->db->get_where('products', array('kategori_product'=>'Shelter Bus'));
			return $que->num_rows();
		}

		public function get_gallery_shelter($limit,$start,$srch = NULL)
		{
			if($srch == "NULL") $srch = "";
			$sql = "SELECT * FROM products WHERE kategori_product LIKE '%$srch%' ORDER BY id_product DESC LIMIT " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function count_gallery_sipil()
		{
			$que = $this->db->get_where('products', array('kategori_product'=>'Pekerjaan Sipil'));
			return $que->num_rows();
		}

		public function get_gallery_sipil($limit,$start,$srch = NULL)
		{
			if($srch == "NULL") $srch = "";
			$sql = "SELECT * FROM products WHERE kategori_product LIKE '%$srch%' ORDER BY id_product DESC LIMIT " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function count_gallery_baja()
		{
			$que = $this->db->get_where('products', array('kategori_product'=>'Konstruksi Baja'));
			return $que->num_rows();
		}

		public function get_gallery_baja($limit,$start,$srch = NULL)
		{
			if($srch == "NULL") $srch = "";
			$sql = "SELECT * FROM products WHERE kategori_product LIKE '%$srch%' ORDER BY id_product DESC LIMIT " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function count_gallery_gudang()
		{
			$que = $this->db->get_where('products', array('kategori_product'=>'Konstruksi Gudang'));
			return $que->num_rows();
		}

		public function get_gallery_gudang($limit,$start,$srch = NULL)
		{
			if($srch == "NULL") $srch = "";
			$sql = "SELECT * FROM products WHERE kategori_product LIKE '%$srch%' ORDER BY id_product DESC LIMIT " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function count_gallery_k_rumah()
		{
			$que = $this->db->get_where('products', array('kategori_product'=>'Konstruksi Rumah'));
			return $que->num_rows();
		}

		public function get_gallery_k_rumah($limit,$start,$srch = NULL)
		{
			if($srch == "NULL") $srch = "";
			$sql = "SELECT * FROM products WHERE kategori_product LIKE '%$srch%' ORDER BY id_product DESC LIMIT " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function count_gallery_r_rumah()
		{
			$que = $this->db->get_where('products', array('kategori_product'=>'Renovasi Rumah'));
			return $que->num_rows();
		}

		public function get_gallery_r_rumah($limit,$start,$srch = NULL)
		{
			if($srch == "NULL") $srch = "";
			$sql = "SELECT * FROM products WHERE kategori_product LIKE '%$srch%' ORDER BY id_product DESC LIMIT " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function count_gallery_c_rumah()
		{
			$que = $this->db->get_where('products', array('kategori_product'=>'Pengecatan Rumah'));
			return $que->num_rows();
		}

		public function get_gallery_c_rumah($limit,$start,$srch = NULL)
		{
			if($srch == "NULL") $srch = "";
			$sql = "SELECT * FROM products WHERE kategori_product LIKE '%$srch%' ORDER BY id_product DESC LIMIT " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function admin_data()
		{
			$que = $this->db->get_where('users', array('username'=>'admin'));
			return $que->row();
		}
	}
?>