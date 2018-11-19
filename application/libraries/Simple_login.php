<?php if(! defined ('BASEPATH')) exit ('Akses langsung tidak diperbolehkan');
	
	class Simple_login
	{
		//set super global
		var $CI = NULL;
		public function __construct()
		{
			$this->CI =& get_instance();
		}
		//fungsi login
		public function login($username, $password)
		{
			$query = $this->CI->db->get_where('users', array('username'=>$username, 'password'=>$password));
			if($query->num_rows() == 1)
			{
				$row = $this->CI->db->query('SELECT id_user FROM users where username="'.$username.'"');
				$admin = $row->row();
				$id = $admin->id_user;
				$this->CI->session->set_userdata('username', $username);
				$this->CI->session->set_userdata('id_login', uniqid(rand()));
				$this->CI->session->set_userdata('id', $id);
				redirect(base_url('C_admin'));
			}
			else
			{
				$this->CI->session->set_flashdata('sukses', '<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button><strong>Oops... Username/Password salah!!!</strong></div></div>');
				redirect(base_url('C_login'));
			}
			return false;
		}
		//proteksi halaman
		public function cek_login()
		{
			if($this->CI->session->userdata('username') == '')
			{
				$this->CI->session->set_flashdata('sukses', '<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button><strong>Anda belum login!!! Silahkan Login Terlebih Dahulu</strong></div></div>');
				redirect(base_url('C_login'));
			}
		}
		//fungsi logout
		public function logout()
		{
			$this->CI->session->unset_userdata('username');
			$this->CI->session->unset_userdata('id_login');
			$this->CI->session->unset_userdata('id');
			$this->CI->session->set_flashdata('sukses', '<div class="col-lg-12"><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button><strong>Anda berhasil logout</strong></div></div>');
			redirect(base_url('C_login'));
		}
	}

?>