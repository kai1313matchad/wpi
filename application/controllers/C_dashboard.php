<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('frontend/M_dash','M_dash');
	}

	public function index()
	{
		$data['banner']=$this->M_dash->select_banner();
		$data['client']=$this->M_dash->select_clients();
		$data['countbanner']=$this->M_dash->count_banner();
		$data['newsdata']=$this->M_dash->select_last_news();
		$data['products']=$this->M_dash->select_last_products();		

		$data['title']='WIPERINDONESIA';
		$data['isi']='menu/frontend/home';	
		$this->load->view('layout/frontend/wrapper_index',$data);
		$this->load->view('layout/frontend/modal',$data);
	}

	public function about()
	{
		$data['title']='WIPERINDONESIA';
		$data['isi']='menu/frontend/about';
		$this->load->view('layout/frontend/wrapper',$data);
	}

	public function news_list()
	{
		$srch='';
		//pagination settings
		$config['base_url'] = site_url('C_dashboard/news_list/');
	    $config['total_rows'] = $this->db->count_all('news');
	    $config['per_page'] = "8";
	    $config["uri_segment"] = 3;
	    $choice = $config["total_rows"]/$config["per_page"];
	    $config["num_links"] = floor($choice);

	    // integrate bootstrap pagination
	    $config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = false;
	    $config['last_link'] = false;
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['prev_link'] = '«';
	    $config['prev_tag_open'] = '<li class="prev">';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] = '»';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $this->pagination->initialize($config);

	    $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $data['newsdata'] = $this->M_dash->get_newslist_data($config["per_page"], $data['page'], NULL);
	    $data['pagination'] = $this->pagination->create_links();		
		$data['title']='WIPERINDONESIA';
		$data['isi']='menu/frontend/news_list';
		$this->load->view('layout/frontend/wrapper',$data);	
	}

	public function news_read()
	{
		$id=$this->uri->segment(3);
		$data['news']=$this->M_dash->select_news_read($id);
		$data['title']='WIPERINDONESIA';
		$data['isi']='menu/frontend/news_read';
		$this->load->view('layout/frontend/wrapper',$data);	
	}

	public function career_list()
	{
		$srch='';
		//pagination settings
		$config['base_url'] = site_url('C_dashboard/career_list/');
	    $config['total_rows'] = $this->db->count_all('jobs');
	    $config['per_page'] = "10";
	    $config["uri_segment"] = 3;
	    $choice = $config["total_rows"]/$config["per_page"];
	    $config["num_links"] = floor($choice);

	    // integrate bootstrap pagination
	    $config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = false;
	    $config['last_link'] = false;
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['prev_link'] = '«';
	    $config['prev_tag_open'] = '<li class="prev">';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] = '»';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $this->pagination->initialize($config);

	    $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $data['listdata'] = $this->M_dash->get_careerlist_data($config["per_page"], $data['page'], NULL);
	    $data['pagination'] = $this->pagination->create_links();	

		$data['total']=$this->M_dash->count_careerlist($srch);
		$data['title']='WIPERINDONESIA';
		$data['isi']='menu/frontend/career';
		$this->load->view('layout/frontend/wrapper',$data);
	}

	public function career_details($id)
	{
		// $id=$this->uri->segment(3);
		$data['career']=$this->M_dash->select_career_details($id);
		$data['title']='WIPERINDONESIA';
		$data['isi']='menu/frontend/career_details';
		$this->load->view('layout/frontend/wrapper',$data);
	}

	public function career_apply($id)
	{
		// $id=$this->uri->segment(3);
		$data['error']=$this->upload->display_errors();
		$data['data_career']=$this->M_dash->select_career_details($id);
		$data['title']='WIPERINDONESIA';
		$data['isi']='menu/frontend/career_apply';
		$this->load->view('layout/frontend/wrapper',$data);
	}

	public function send_email()
	{
		$adm_data=$this->M_dash->admin_data();
		//email config
		/*$config['protocol']='smtp';
		$config['smtp_host']='ssl://smtp.googlemail.com';
		$config['smtp_port']=465;
		$config['smtp_user']='kaishasatrio@match-advertising.com';
		$config['smtp_pass']='3m41lk3rj4?';*/
		$config['protocol']='smtp';
		$config['smtp_host']='ssl://mail.wiperindonesia.com';
		$config['smtp_port']= 465;
		$config['smtp_user']=$adm_data->mail;
		$config['smtp_pass']=$adm_data->pass;

		//configure email libraries
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$name=$this->input->post('name');
		$from=$this->input->post('sender');		
		$company=$this->input->post('company');
		$address=$this->input->post('address');
		$phone=$this->input->post('phone');
		$subject='Email Dari - '.$from.' - '.$company.' - '.$address.' - '.$phone;
		$msg=$this->input->post('msg');

		$this->email->from($from, $name);
		$this->email->to($adm_data->mail);
		$this->email->subject($subject);
		$this->email->message($msg);

		if($this->email->send())
		 {
		 	redirect('C_dashboard','refresh');
		 }
		 
		 else
		 {
		 	show_error($this->email->print_debugger());
		 	redirect('C_dashboard','refresh');
		 }		
	}

	public function career_send()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('sts_nikah','Status Nikah','required');
		$this->form_validation->set_rules('umur','Umur','required');
		$this->form_validation->set_rules('instansi','Instansi','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('jurusan','Jurusan','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('pend_akhir','Pendidikan Terakhir','required');
		$this->form_validation->set_rules('no_tlp','No Telepon','required');		
		$this->form_validation->set_rules('email','Email','required');		
		$this->form_validation->set_message('required', '<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>%s Belum Diisi, Isi Terlebih Dahulu!!!</div></div>');
		$nmfile='applicant_'.time();
		$config['upload_path']='./assets/applicants/';
		$config['allowed_types']='pdf|zip|rar';
		$config['max_size']='3000';			
		$config['file_name']=$nmfile;
		$this->upload->initialize($config);
		$adm_data=$this->M_dash->admin_data();
		$config['protocol']='smtp';
		$config['smtp_host']='ssl://mail.wiperindonesia.com';
		$config['smtp_port']= 465;
		$config['smtp_user']=$adm_data->hc_mail;
		$config['smtp_pass']=$adm_data->hc_pass;
		$this->load->library('email', $config);
		if($this->form_validation->run() === FALSE)
		{
			$id=$this->input->post('id_job');
			$data['error']=$this->upload->display_errors();
			$data['data_career']=$this->M_dash->select_career_details($id);
			$data['title']='WIPERINDONESIA';
			$data['isi']='menu/frontend/career_apply';
			$this->load->view('layout/frontend/wrapper',$data);
		}
		else
		{
			$id=$this->input->post('id_job');		

			if(!$this->upload->do_upload('cv'))
			{
				$data=array
					(
						'id_job'=>$this->input->post('id_job'),
						'judul_job'=>$this->input->post('judul'),
						'nama'=>$this->input->post('nama'),
						'sts_nikah'=>$this->input->post('sts_nikah'),
						'umur'=>$this->input->post('umur'),
						'gender'=>$this->input->post('gender'),
						'instansi'=>$this->input->post('instansi'),
						'jurusan'=>$this->input->post('jurusan'),
						'alamat'=>$this->input->post('alamat'),
						'no_tlp'=>$this->input->post('no_tlp'),
						'email'=>$this->input->post('email'),
						'pend_akhir'=>$this->input->post('pend_akhir'),
						'thn_masuk'=>$this->input->post('thn_masuk'),
						'thn_lulus'=>$this->input->post('thn_lulus'),
						'perusahaan'=>$this->input->post('perusahaan'),
						'jabatan'=>$this->input->post('jabatan'),
						'thn_masuk_krj'=>$this->input->post('thn_mulai'),
						'thn_keluar'=>$this->input->post('thn_akhir'),
						'alasan'=>$this->input->post('alasan')
					);				
				//configure email libraries				
				$this->email->set_newline("\r\n");				
				$subject='Email Apply Lowongan';
				$nama=$this->input->post('nama');
				$lowongan=$this->input->post('judul');
				$msg='Nama Pelamar '.$nama.' Lowongan '.$lowongan;
				$this->email->from($adm_data->mail);
				$this->email->to($adm_data->hc_mail);
				$this->email->subject($subject);
				$this->email->message($msg);
				$this->email->send();
				$res = $this->M_dash->insert_career($data);
				if($res == '0')
				{					
					$data['msg']='<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Gagal Dikirim!!!</div></div>';
				}
				else
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Berhasil Dikirim!!!</div></div>';
				}
				$data['error']=$this->upload->display_errors();
				$data['data_career']=$this->M_dash->select_career_details($id);
				$data['title']='WIPERINDONESIA';
				$data['isi']='menu/frontend/career_apply';
				$this->load->view('layout/frontend/wrapper',$data);
			}
			else
			{
				$fileinfo=$this->upload->data();
				$data=array
					(
						'id_job'=>$this->input->post('id_job'),
						'judul_job'=>$this->input->post('judul'),
						'nama'=>$this->input->post('nama'),
						'sts_nikah'=>$this->input->post('sts_nikah'),
						'umur'=>$this->input->post('umur'),
						'gender'=>$this->input->post('gender'),
						'instansi'=>$this->input->post('instansi'),
						'jurusan'=>$this->input->post('jurusan'),
						'alamat'=>$this->input->post('alamat'),
						'no_tlp'=>$this->input->post('no_tlp'),
						'email'=>$this->input->post('email'),
						'pend_akhir'=>$this->input->post('pend_akhir'),
						'thn_masuk'=>$this->input->post('thn_masuk'),
						'thn_lulus'=>$this->input->post('thn_lulus'),
						'perusahaan'=>$this->input->post('perusahaan'),
						'jabatan'=>$this->input->post('jabatan'),
						'thn_masuk_krj'=>$this->input->post('thn_mulai'),
						'thn_keluar'=>$this->input->post('thn_akhir'),
						'alasan'=>$this->input->post('alasan'),
						'path_cv'=>$fileinfo['file_name']
					);
				//configure email libraries				
				$this->email->set_newline("\r\n");				
				$subject='Email Apply Lowongan';
				$nama=$this->input->post('nama');
				$lowongan=$this->input->post('judul');
				$msg='Nama Pelamar '.$nama.' Lowongan '.$lowongan;
				$this->email->from($adm_data->mail);
				$this->email->to($adm_data->hc_mail);
				$this->email->subject($subject);
				$this->email->message($msg);
				$this->email->send();
				$res = $this->M_dash->insert_career($data);
				if($res == '0')
				{				
					$data['msg']='<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Gagal Dikirim!!!</div></div>';
				}
				else
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Berhasil Dikirim!!!</div></div>';
				}
				$data['error']=$this->upload->display_errors();
				$data['data_career']=$this->M_dash->select_career_details($id);
				$data['title']='WIPERINDONESIA';
				$data['isi']='menu/frontend/career_apply';
				$this->load->view('layout/frontend/wrapper',$data);
			}
		}
	}

	public function products_gallery()
	{
		//product by category
		$data['jpo']=$this->M_dash->select_last_jpo();
		$data['pos']=$this->M_dash->select_last_pos();				
		$data['shelter']=$this->M_dash->select_last_shelter();
		$data['sipil']=$this->M_dash->select_last_sipil();
		$data['baja']=$this->M_dash->select_last_baja();
		$data['gudang']=$this->M_dash->select_last_gudang();
		$data['rumah']=$this->M_dash->select_last_rumah();
		$data['renov']=$this->M_dash->select_last_renov();
		$data['cat']=$this->M_dash->select_last_cat();

		$data['title']='WIPERINDONESIA';
		$data['isi']='menu/frontend/products_gallery';
		$this->load->view('layout/frontend/wrapper',$data);
	}

	public function gallery_jpo()
	{
		$srch='JPO (Jembatan Penyebrangan Orang)';
		//pagination settings
		$config['base_url'] = site_url('C_dashboard/gallery_jpo/');
	    $config['total_rows'] = $this->M_dash->count_gallery_jpo();
	    $config['per_page'] = "1";
	    $config["uri_segment"] = 3;
	    $choice = $config["total_rows"]/$config["per_page"];
	    $config["num_links"] = floor($choice);

	    // integrate bootstrap pagination
	    $config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = false;
	    $config['last_link'] = false;
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['prev_link'] = '«';
	    $config['prev_tag_open'] = '<li class="prev">';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] = '»';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $this->pagination->initialize($config);

	    $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $data['listdata'] = $this->M_dash->get_gallery_jpo($config["per_page"], $data['page'], $srch);
	    $data['pagination'] = $this->pagination->create_links();	
		
		$data['title']='WIPERINDONESIA';
		$data['isi']='menu/frontend/detail_gallery';
		$this->load->view('layout/frontend/wrapper',$data);	
	}

	public function gallery_pos()
	{
		$srch='Pos Security';
		//pagination settings
		$config['base_url'] = site_url('C_dashboard/gallery_pos/');
	    $config['total_rows'] = $this->M_dash->count_gallery_pos();
	    $config['per_page'] = "1";
	    $config["uri_segment"] = 3;
	    $choice = $config["total_rows"]/$config["per_page"];
	    $config["num_links"] = floor($choice);

	    // integrate bootstrap pagination
	    $config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = false;
	    $config['last_link'] = false;
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['prev_link'] = '«';
	    $config['prev_tag_open'] = '<li class="prev">';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] = '»';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $this->pagination->initialize($config);

	    $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $data['listdata'] = $this->M_dash->get_gallery_pos($config["per_page"], $data['page'], $srch);
	    $data['pagination'] = $this->pagination->create_links();	
		
		$data['title']='WIPERINDONESIA';
		$data['isi']='menu/frontend/detail_gallery';
		$this->load->view('layout/frontend/wrapper',$data);	
	}

	public function gallery_shelter()
	{
		$srch='Shelter Bus';
		//pagination settings
		$config['base_url'] = site_url('C_dashboard/gallery_shelter/');
	    $config['total_rows'] = $this->M_dash->count_gallery_shelter();
	    $config['per_page'] = "1";
	    $config["uri_segment"] = 3;
	    $choice = $config["total_rows"]/$config["per_page"];
	    $config["num_links"] = floor($choice);

	    // integrate bootstrap pagination
	    $config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = false;
	    $config['last_link'] = false;
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['prev_link'] = '«';
	    $config['prev_tag_open'] = '<li class="prev">';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] = '»';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $this->pagination->initialize($config);

	    $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $data['listdata'] = $this->M_dash->get_gallery_shelter($config["per_page"], $data['page'], $srch);
	    $data['pagination'] = $this->pagination->create_links();	
		
		$data['title']='WIPERINDONESIA';
		$data['isi']='menu/frontend/detail_gallery';
		$this->load->view('layout/frontend/wrapper',$data);	
	}

	public function gallery_sipil()
	{
		$srch='Pekerjaan Sipil';
		//pagination settings
		$config['base_url'] = site_url('C_dashboard/gallery_sipil/');
	    $config['total_rows'] = $this->M_dash->count_gallery_sipil();
	    $config['per_page'] = "1";
	    $config["uri_segment"] = 3;
	    $choice = $config["total_rows"]/$config["per_page"];
	    $config["num_links"] = floor($choice);

	    // integrate bootstrap pagination
	    $config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = false;
	    $config['last_link'] = false;
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['prev_link'] = '«';
	    $config['prev_tag_open'] = '<li class="prev">';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] = '»';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $this->pagination->initialize($config);

	    $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $data['listdata'] = $this->M_dash->get_gallery_sipil($config["per_page"], $data['page'], $srch);
	    $data['pagination'] = $this->pagination->create_links();	
		
		$data['title']='WIPERINDONESIA';
		$data['isi']='menu/frontend/detail_gallery';
		$this->load->view('layout/frontend/wrapper',$data);	
	}

	public function gallery_baja()
	{
		$srch='Konstruksi Baja';
		//pagination settings
		$config['base_url'] = site_url('C_dashboard/gallery_baja/');
	    $config['total_rows'] = $this->M_dash->count_gallery_baja();
	    $config['per_page'] = "1";
	    $config["uri_segment"] = 3;
	    $choice = $config["total_rows"]/$config["per_page"];
	    $config["num_links"] = floor($choice);

	    // integrate bootstrap pagination
	    $config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = false;
	    $config['last_link'] = false;
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['prev_link'] = '«';
	    $config['prev_tag_open'] = '<li class="prev">';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] = '»';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $this->pagination->initialize($config);

	    $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $data['listdata'] = $this->M_dash->get_gallery_baja($config["per_page"], $data['page'], $srch);
	    $data['pagination'] = $this->pagination->create_links();	
		
		$data['title']='WIPERINDONESIA';
		$data['isi']='menu/frontend/detail_gallery';
		$this->load->view('layout/frontend/wrapper',$data);	
	}

	public function gallery_gudang()
	{
		$srch='Konstruksi Gudang';
		//pagination settings
		$config['base_url'] = site_url('C_dashboard/gallery_gudang/');
	    $config['total_rows'] = $this->M_dash->count_gallery_gudang();
	    $config['per_page'] = "1";
	    $config["uri_segment"] = 3;
	    $choice = $config["total_rows"]/$config["per_page"];
	    $config["num_links"] = floor($choice);

	    // integrate bootstrap pagination
	    $config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = false;
	    $config['last_link'] = false;
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['prev_link'] = '«';
	    $config['prev_tag_open'] = '<li class="prev">';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] = '»';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $this->pagination->initialize($config);

	    $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $data['listdata'] = $this->M_dash->get_gallery_gudang($config["per_page"], $data['page'], $srch);
	    $data['pagination'] = $this->pagination->create_links();	
		
		$data['title']='WIPERINDONESIA';
		$data['isi']='menu/frontend/detail_gallery';
		$this->load->view('layout/frontend/wrapper',$data);	
	}

	public function gallery_k_rumah()
	{
		$srch='Konstruksi Rumah';
		//pagination settings
		$config['base_url'] = site_url('C_dashboard/gallery_k_rumah/');
	    $config['total_rows'] = $this->M_dash->count_gallery_k_rumah();
	    $config['per_page'] = "1";
	    $config["uri_segment"] = 3;
	    $choice = $config["total_rows"]/$config["per_page"];
	    $config["num_links"] = floor($choice);

	    // integrate bootstrap pagination
	    $config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = false;
	    $config['last_link'] = false;
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['prev_link'] = '«';
	    $config['prev_tag_open'] = '<li class="prev">';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] = '»';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $this->pagination->initialize($config);

	    $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $data['listdata'] = $this->M_dash->get_gallery_k_rumah($config["per_page"], $data['page'], $srch);
	    $data['pagination'] = $this->pagination->create_links();	
		
		$data['title']='WIPERINDONESIA';
		$data['isi']='menu/frontend/detail_gallery';
		$this->load->view('layout/frontend/wrapper',$data);	
	}

	public function gallery_r_rumah()
	{
		$srch='Renovasi Rumah';
		//pagination settings
		$config['base_url'] = site_url('C_dashboard/gallery_r_rumah/');
	    $config['total_rows'] = $this->M_dash->count_gallery_r_rumah();
	    $config['per_page'] = "1";
	    $config["uri_segment"] = 3;
	    $choice = $config["total_rows"]/$config["per_page"];
	    $config["num_links"] = floor($choice);

	    // integrate bootstrap pagination
	    $config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = false;
	    $config['last_link'] = false;
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['prev_link'] = '«';
	    $config['prev_tag_open'] = '<li class="prev">';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] = '»';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $this->pagination->initialize($config);

	    $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $data['listdata'] = $this->M_dash->get_gallery_r_rumah($config["per_page"], $data['page'], $srch);
	    $data['pagination'] = $this->pagination->create_links();	
		
		$data['title']='WIPERINDONESIA';
		$data['isi']='menu/frontend/detail_gallery';
		$this->load->view('layout/frontend/wrapper',$data);	
	}

	public function gallery_c_rumah()
	{
		$srch='Pengecatan Rumah';
		//pagination settings
		$config['base_url'] = site_url('C_dashboard/gallery_c_rumah/');
	    $config['total_rows'] = $this->M_dash->count_gallery_c_rumah();
	    $config['per_page'] = "1";
	    $config["uri_segment"] = 3;
	    $choice = $config["total_rows"]/$config["per_page"];
	    $config["num_links"] = floor($choice);

	    // integrate bootstrap pagination
	    $config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = false;
	    $config['last_link'] = false;
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['prev_link'] = '«';
	    $config['prev_tag_open'] = '<li class="prev">';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] = '»';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $this->pagination->initialize($config);

	    $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $data['listdata'] = $this->M_dash->get_gallery_c_rumah($config["per_page"], $data['page'], $srch);
	    $data['pagination'] = $this->pagination->create_links();	
		
		$data['title']='WIPERINDONESIA';
		$data['isi']='menu/frontend/detail_gallery';
		$this->load->view('layout/frontend/wrapper',$data);	
	}
}
?>