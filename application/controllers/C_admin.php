<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('backend/M_jobs','M_jobs');
		$this->load->model('backend/M_news','M_news');
		$this->load->model('backend/M_banner','M_banner');
		$this->load->model('backend/M_product','M_product');
		$this->load->model('backend/M_applicant','M_applicant');
		$this->load->model('backend/M_account','M_account');
		$this->load->model('backend/M_clients','M_client');
		$this->load->model('backend/M_meta','M_meta');
	}

	//Menu List
	public function index()
	{
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_dash';
		$this->load->view('layout/backend/wrapper',$data);
	}

	public function logout()
	{
		$this->simple_login->logout();
	}	

	public function menu_ganti_banner()
	{
		//pagination settings
		$config['base_url'] = site_url('C_admin/menu_ganti_banner/');
	    $config['total_rows'] = $this->db->count_all('banner');
	    $config['per_page'] = "5";
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
	    $data['listdata'] = $this->M_banner->get_banner_data($config["per_page"], $data['page'], NULL);
	    $data['pagination'] = $this->pagination->create_links();	
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_chgbann';
		$data['error']=$this->upload->display_errors();
		$data['image']=$this->M_banner->select_banner();
		$data['total']=$this->M_banner->count_row_banner();
		$this->load->view('layout/backend/wrapper',$data);
	}

	public function menu_tambah_banner()
	{
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_addbanner';
		$data['error']=$this->upload->display_errors();
		$this->load->view('layout/backend/wrapper',$data);
	}

	public function menu_edit_banner()
	{
		$id=$this->uri->segment(3);
		$data['dat']=$this->M_banner->edit_banner($id);
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_editbanner';
		$data['error']=$this->upload->display_errors();
		$this->load->view('layout/backend/wrapper',$data);
	}

	public function menu_data_product()
	{
		//pagination settings
		$config['base_url'] = site_url('C_admin/menu_data_product/');
	    $config['total_rows'] = $this->db->count_all('products');
	    $config['per_page'] = "5";
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
	    $data['listdata'] = $this->M_product->get_product_data($config["per_page"], $data['page'], NULL);
	    $data['pagination'] = $this->pagination->create_links();
	    $data['error']=$this->upload->display_errors();
		$data['total']=$this->M_product->count_row_product();
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_productdata';
		$this->load->view('layout/backend/wrapper',$data);
	}

	public function menu_tambah_product()
	{
		$data['error']=$this->upload->display_errors();
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_productadd';
		$this->load->view('layout/backend/wrapper',$data);
	}

	public function menu_edit_product()
	{
		$id=$this->uri->segment(3);
		$data['dat']=$this->M_product->edit_product($id);
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_productedit';
		$data['error']=$this->upload->display_errors();
		$this->load->view('layout/backend/wrapper',$data);	
	}

	public function menu_data_news()
	{
		//pagination settings
		$config['base_url'] = site_url('C_admin/menu_data_news/');
	    $config['total_rows'] = $this->db->count_all('news');
	    $config['per_page'] = "5";
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
	    $data['listdata'] = $this->M_news->get_news_data($config["per_page"], $data['page'], NULL);
	    $data['pagination'] = $this->pagination->create_links();
	    $data['error']=$this->upload->display_errors();		
		$data['total']=$this->M_news->count_row_news();
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_newslist';
		$this->load->view('layout/backend/wrapper',$data);
	}

	public function menu_tambah_news()
	{
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_newsadd';
		$data['error']=$this->upload->display_errors();
		$this->load->view('layout/backend/wrapper',$data);
	}

	public function menu_edit_news()
	{
		$id=$this->uri->segment(3);
		$data['dat']=$this->M_news->select_news($id);
		$data['error']=$this->upload->display_errors();
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_newsedit';		
		$this->load->view('layout/backend/wrapper',$data);
	}

	public function menu_data_jobs()
	{
		//pagination settings
		$config['base_url'] = site_url('C_admin/menu_data_jobs/');
	    $config['total_rows'] = $this->db->count_all('jobs');
	    $config['per_page'] = "5";
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
	    $data['listdata'] = $this->M_jobs->get_jobs_data($config["per_page"], $data['page'], NULL);
	    $data['pagination'] = $this->pagination->create_links();
	    $data['total']=$this->M_jobs->count_row_jobs();
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_joblist';
		$this->load->view('layout/backend/wrapper',$data);
	}

	public function menu_tambah_jobs()
	{
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_jobadd';
		$this->load->view('layout/backend/wrapper',$data);
	}

	public function menu_edit_jobs()
	{
		$id=$this->uri->segment(3);
		$data['dat']=$this->M_jobs->select_job($id);
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_editjobs';		
		$this->load->view('layout/backend/wrapper',$data);
	}

	public function menu_data_clients()
	{
		//pagination settings
		$config['base_url'] = site_url('C_admin/menu_data_clients/');
	    $config['total_rows'] = $this->db->count_all('clients');
	    $config['per_page'] = "5";
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
	    $data['listdata'] = $this->M_client->get_clients_data($config["per_page"], $data['page'], NULL);
	    $data['pagination'] = $this->pagination->create_links();
	    $data['error']=$this->upload->display_errors();
		$data['total']=$this->M_client->count_row_clients();
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_clientsdata';
		$this->load->view('layout/backend/wrapper',$data);
	}

	public function menu_tambah_clients()
	{
		$data['error']=$this->upload->display_errors();
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_clientsadd';
		$this->load->view('layout/backend/wrapper',$data);
	}

	public function menu_edit_clients()
	{
		$id=$this->uri->segment(3);
		$data['dat']=$this->M_client->edit_clients($id);
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_clientsedit';
		$data['error']=$this->upload->display_errors();
		$this->load->view('layout/backend/wrapper',$data);	
	}

	public function menu_data_meta()
	{
		//pagination settings
		$config['base_url'] = site_url('C_admin/menu_data_meta/');
	    $config['total_rows'] = $this->db->count_all('meta_tag');
	    $config['per_page'] = "5";
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
	    $data['listdata'] = $this->M_meta->get_meta_data($config["per_page"], $data['page'], NULL);
	    $data['pagination'] = $this->pagination->create_links();
	    $data['error']=$this->upload->display_errors();
		$data['total']=$this->M_meta->count_row_meta();
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_metadata';
		$this->load->view('layout/backend/wrapper',$data);
	}

	public function menu_tambah_meta()
	{
		$data['error']=$this->upload->display_errors();
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_metaadd';
		$this->load->view('layout/backend/wrapper',$data);
	}

	public function insert_meta()
		{
			$this->form_validation->set_rules('meta_title','Meta Title','required');			
			$this->form_validation->set_rules('meta_keyword','Meta Keyword','required');			
			$this->form_validation->set_message('required', '<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button><strong>%s Belum Diisi, Isi Terlebih Dahulu!!!</strong></div></div>');
			$table='meta_tag';
			// $minwidth='100';
			// $minheight='100';
			// $path='./assets/uploads/meta/';
			// $this->configImg($path,$minwidth,$minheight);
			if($this->form_validation->run() === FALSE)
			{
				$this->add_meta();
			}
			else
			{
				// if(!$this->upload->do_upload('img'))
				// {
				// 	$this->add_clients();
				// }
				// else
				// {
					// $fileinfo=$this->upload->data();
					$data=array
					(
						'meta_title'=>$this->input->post('meta_title'),						
						'meta_keyword'=>$this->input->post('meta_keyword'),
						'meta_desc'=>$this->input->post('meta_desc')
						// 'path'=>$fileinfo['file_name']
					);					
					$res = $this->M_meta->insert_meta($table,$data);
					if($res == '0')
					{
						$data['msg']='<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button><strong>Data Gagal Disimpan!!!</strong></div></div>';
					}
					else
					{
						$data['msg']='<div class="col-lg-12"><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button><strong>Data Berhasil Disimpan!!!</strong></div></div>';
					}
					$this->load->vars($data);
					$this->add_meta();
				// }
			}
		}

	public function meta_search()
		{
			$srch = ($this->input->post("cari")) ? $this->input->post("cari") : "NULL";
			$srch = ($this->uri->segment(3)) ? $this->uri->segment(3) : $srch;
			$table='meta_tag';
			$order='meta_id';
			$spe='meta_title';
			//pagination settings
			$config['base_url'] = site_url("C_admin/meta_search/$srch");
		    $config['total_rows'] = $this->M_meta->count_pagdata($table,$spe,$srch);
		    $config['per_page'] = "5";
		    $config["uri_segment"] = 4;
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
		    $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		    $data['listdata'] = $this->M_meta->get_srch_pag_data($table,$order,$spe,$config["per_page"], $data['page'], $srch);
		    $data['pagination'] = $this->pagination->create_links();		    
			$data['total']=$this->M_meta->count_pagdata($table,$spe,$srch);
			$data['title']='Wiper Indonesia';
			$data['isi']='menu/backend/adm_metadata';			
			$this->load->view('layout/backend/wrapper',$data);
		}

	public function add_meta()
		{
			$data['title']='Wiper Indonesia';
			$data['isi']='menu/backend/adm_metaadd';
			$data['error']=$this->upload->display_errors();
			$this->load->view('layout/backend/wrapper',$data);
		}

	public function edit_meta()
		{
			$id=$this->uri->segment(3);
			$id_table='meta_id';
			$table='meta_tag';
			$data['title']='Tritunggal Metalworks';
			$data['isi']='menu/backend/adm_metaedit';
			$data['data']=$this->M_meta->get_edit_data($table,$id_table,$id);
			$data['error']=$this->upload->display_errors();			
			$this->load->view('layout/backend/wrapper',$data);
		}

	public function update_meta()
		{
			$this->form_validation->set_rules('meta_title','Meta Title','required');			
			$this->form_validation->set_rules('meta_keyword','Meta Keyword','required');			
			$this->form_validation->set_message('required', '<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button><strong>%s Belum Diisi, Isi Terlebih Dahulu!!!</strong></div></div>');
			$id_table='meta_id';
			$table='meta_tag';
			$id=$this->input->post('meta_id');
			if($this->form_validation->run() === FALSE)
			{
				$data['title']='Wiper Indonesia';
				$data['isi']='menu/backend/adm_metaedit';
				$data['data']=$this->M_meta->get_edit_data($table,$id_table,$id);
				$data['error']=$this->upload->display_errors();
				$this->load->view('layout/backend/wrapper',$data);	
			}
			else
			{
				$data=array
				(
					'meta_title'=>$this->input->post('meta_title'),						
					'meta_keyword'=>$this->input->post('meta_keyword'),
					'meta_desc'=>$this->input->post('meta_desc')					
				);
				$res = $this->M_meta->update_data($table,$id,$id_table,$data);
				if($res == '0')
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button><strong>Data Gagal Disimpan!!!</strong></div></div>';
				}
				else
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button><strong>Data Berhasil Disimpan!!!</strong></div></div>';	
				}					
				$data['title']='Wiper Indonesia';
				$data['isi']='menu/backend/adm_metaedit';
				$data['data']=$this->M_meta->get_edit_data($table,$id_table,$id);
				$data['error']=$this->upload->display_errors();
				$this->load->view('layout/backend/wrapper',$data);
			}
		}

	public function delete_meta()
		{
			$id=$this->uri->segment(3);
			$img_path=$this->uri->segment(4);	
			$id_table='meta_id';
			$table='meta_tag';	
			// unlink('./assets/uploads/clients/'.$img_path);
			$this->M_meta->delete_data($table,$id,$id_table);
			redirect('C_admin/menu_data_meta?sts=del_sukses');
		}

	public function account_data()
		{
			$data['account']=$this->M_adm->select_data();
			$data['title']='Tritunggal Metalworks';
			$data['isi']='menu/backend/account_data';			
			$this->load->view('layout/backend/wrapper',$data);
		}

	public function menu_data_pelamar()
	{
		//pagination settings
		$config['base_url'] = site_url('C_admin/menu_data_pelamar/');
	    $config['total_rows'] = $this->db->count_all('career_apply');
	    $config['per_page'] = "5";
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
	    $data['listdata'] = $this->M_applicant->get_applicant_data($config["per_page"], $data['page'], NULL);
	    $data['pagination'] = $this->pagination->create_links();
	    $data['total']=$this->db->count_all('career_apply');
	    $data['applicant']=$this->M_applicant->select_applicant();
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_applicantlist';
		$this->load->view('layout/backend/wrapper',$data);		
	}

	public function delete_applicant()
	{
		$id=$this->uri->segment(3);
		$img_path=$this->uri->segment(4);		
		unlink('./assets/applicants/'.$img_path);
		$this->M_applicant->delete_applicant($id);
		redirect('C_admin/menu_data_pelamar?sts=del_sukses');
	}

	public function menu_data_account()
	{
		$id=$this->session->userdata('id');
		$data['usrdata']=$this->M_account->get_usr_data($id);
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_account';
		$this->load->view('layout/backend/wrapper',$data);
	}

	//Functions List//
	//Data Tables

	//Image Management
	public function configImg($path)
	{
		$nmfile='img_'.time();
		$config['upload_path']=$path;
		$config['allowed_types']='jpg|jpeg|png|gif';
		$config['max_size']='3000';
		$config['max_width']='2000';
		$config['max_height']='2000';
		$config['file_name']=$nmfile;
		$this->upload->initialize($config);
	}

	//Insert, Update, Delete Jobs
	public function add_jobs()
	{
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('tempat','Penempatan','required');
		$this->form_validation->set_rules('tglstart','Tanggal Awal','required');
		$this->form_validation->set_rules('tglend','Tanggal Selesai','required');
		$this->form_validation->set_rules('desc','Deskripsi Kerja','required');
		$this->form_validation->set_rules('info','Informasi','required');
		$this->form_validation->set_message('required', '<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>%s Belum Diisi, Isi Terlebih Dahulu!!!</div></div>');

		if($this->form_validation->run() === FALSE)
		{
			$this->menu_tambah_jobs();
		}
		else
		{
			$judul=$this->input->post('judul');
			$tempat=$this->input->post('tempat');
			$tglstart=$this->input->post('tglstart');			
			$tglend=$this->input->post('tglend');			
			$desc=$this->input->post('desc');
			$info=$this->input->post('info');			
			$dtjob = array (
							'judul_job'=>$judul,
							'lokasi_job'=>$tempat,
							'tglstart_job'=>$tglstart,
							'tglend_job'=>$tglend,
							'desc_job'=>$desc,
							'info_job'=>$info
							);
			$res=$this->M_jobs->insert_job($dtjob);
			if($res == '0')
			{
				$data['msg']='<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Gagal Disimpan!!!</div></div>';
			}
			else
			{
				$data['msg']='<div class="col-lg-12"><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Berhasil Disimpan!!!</div></div>';
			}
			$this->load->vars($data);
			$this->menu_tambah_jobs();
		}
	}

	public function edit_jobs()
	{
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('tempat','Penempatan','required');
		$this->form_validation->set_rules('tglstart','Tanggal Awal','required');
		$this->form_validation->set_rules('tglend','Tanggal Selesai','required');
		$this->form_validation->set_rules('desc','Deskripsi Kerja','required');
		$this->form_validation->set_rules('info','Informasi','required');		
		$this->form_validation->set_message('required', '<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>%s Belum Diisi, Isi Terlebih Dahulu!!!</div></div>');
		if($this->form_validation->run() === FALSE)
		{
			$id = $this->input->post('id');
			$data['dat']=$this->M_jobs->select_job($id);
			$data['title']='Halaman Dashboard Admin';
			$data['isi']='menu/backend/adm_editjobs';
			$data['error']=$this->upload->display_errors();
			$this->load->view('layout/backend/wrapper',$data);			
		}
		else
		{
			$id = $this->input->post('id');
			$judul=$this->input->post('judul');
			$tempat=$this->input->post('tempat');
			$tglstart=$this->input->post('tglstart');			
			$tglend=$this->input->post('tglend');			
			$desc=$this->input->post('desc');
			$info=$this->input->post('info');			
			$dtjob = array (
							'judul_job'=>$judul,
							'lokasi_job'=>$tempat,
							'tglstart_job'=>$tglstart,
							'tglend_job'=>$tglend,
							'desc_job'=>$desc,
							'info_job'=>$info
							);
			$res=$this->M_jobs->update_job($dtjob,$id);
			if($res == '0')
			{
				$data['msg']='<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Gagal Disimpan!!!</div></div>';
			}
			else
			{
				$data['msg']='<div class="col-lg-12"><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Berhasil Disimpan!!!</div></div>';
			}
			$data['dat']=$this->M_jobs->select_job($id);
			$data['title']='Halaman Dashboard Admin';
			$data['isi']='menu/backend/adm_editjobs';
			$data['error']=$this->upload->display_errors();
			$this->load->view('layout/backend/wrapper',$data);
		}
	}

	public function delete_jobs($id)
	{
		$this->M_jobs->delete_job($id);
		redirect('C_admin/menu_data_jobs?sts=del_sukses');
	}

	//Insert, Update, Delete News
	public function add_news()
	{
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('isi','Isi Berita','required');
		$this->form_validation->set_rules('kutip','Kutipan Berita','required');		
		$this->form_validation->set_message('required', '<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>%s Belum Diisi, Isi Terlebih Dahulu!!!</div></div>');

		$path='./assets/uploads/news/';
		$this->configImg($path);

		if($this->form_validation->run() === FALSE)
		{
			$this->menu_tambah_news();
		}
		else
		{
			if(!$this->upload->do_upload('img'))
			{
				$this->menu_tambah_news();
			}
			else
			{
				$fileinfo=$this->upload->data();
				$data=array
				(
					'judul_news'=>$this->input->post('judul'),
					'isi_news'=>$this->input->post('isi'),
					'kutip_news'=>$this->input->post('kutip'),
					'img_news'=>$fileinfo['file_name']
				);
				$res = $this->M_news->insert_news($data);				
				if($res == '0')
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Gagal Disimpan!!!</div></div>';
				}
				else
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Berhasil Disimpan!!!</div></div>';
				}
				$this->load->vars($data);
				$this->menu_tambah_news();
			}
		}
	}

	public function edit_news()
	{		
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('isi','Isi Berita','required');
		$this->form_validation->set_rules('kutip','Kutipan Berita','required');		
		$this->form_validation->set_message('required', '<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>%s Belum Diisi, Isi Terlebih Dahulu!!!</div></div>');
		$id=$this->input->post('id');
		$img_path=$this->input->post('path');
		$path='./assets/uploads/news/';
		$this->configImg($path);
		if($this->form_validation->run() === FALSE)
		{			
			$data['dat']=$this->M_news->select_news($id);
			$data['error']=$this->upload->display_errors();
			$data['title']='Halaman Dashboard Admin';
			$data['isi']='menu/backend/adm_newsedit';			
			$this->load->view('layout/backend/wrapper',$data);
		}
		else
		{			
			if(!$this->upload->do_upload('img'))
			{
				$data=array
				(
					'judul_news'=>$this->input->post('judul'),
					'isi_news'=>$this->input->post('isi'),
					'kutip_news'=>$this->input->post('kutip')					
				);
				$res = $this->M_news->update_news($data,$id);
				if($res == '0')
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Gagal Disimpan!!!</div></div>';
				}
				else
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Berhasil Disimpan!!!</div></div>';
				}

				$data['dat']=$this->M_news->select_news($id);
				$data['error']=$this->upload->display_errors();
				$data['title']='Halaman Dashboard Admin';
				$data['isi']='menu/backend/adm_newsedit';				
				$this->load->view('layout/backend/wrapper',$data);
			}
			else
			{
				$fileinfo=$this->upload->data();
				$data=array
				(
					'judul_news'=>$this->input->post('judul'),
					'isi_news'=>$this->input->post('isi'),
					'kutip_news'=>$this->input->post('kutip'),
					'img_news'=>$fileinfo['file_name']
				);
				@unlink('./assets/uploads/news/'.$img_path);
				$res = $this->M_news->update_news($data,$id);
				if($res == '0')
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Gagal Disimpan!!!</div></div>';
				}
				else
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Berhasil Disimpan!!!</div></div>';					
				}				
				$data['dat']=$this->M_news->select_news($id);
				$data['error']=$this->upload->display_errors();
				$data['title']='Halaman Dashboard Admin';
				$data['isi']='menu/backend/adm_newsedit';				
				$this->load->view('layout/backend/wrapper',$data);
			}
		}
	}

	public function delete_news()
	{
		$id=$this->uri->segment(3);
		$img_path=$this->uri->segment(4);		
		unlink('./assets/uploads/news/'.$img_path);
		$this->M_news->delete_news($id);
		redirect('C_admin/menu_data_news?sts=del_sukses');
	}

	//insert, update, delete clients
	public function add_clients()
	{
		$this->form_validation->set_rules('nama','Nama Client','required');
		$this->form_validation->set_rules('ket','Keterangan','required');
		$this->form_validation->set_message('required', '<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>%s Belum Diisi, Isi Terlebih Dahulu!!!</div></div>');
		$path='./assets/uploads/clients/';
		$this->configImg($path);

		if($this->form_validation->run() === FALSE)
		{
			$this->menu_tambah_clients();
		}
		else
		{
			if(!$this->upload->do_upload('img'))
			{
				$this->menu_tambah_clients();
			}
			else
			{
				$fileinfo=$this->upload->data();
				$data=array
				(
					'nama'=>$this->input->post('nama'),
					'caption'=>$this->input->post('ket'),					
					'path'=>$fileinfo['file_name']
				);
				$res = $this->M_client->insert_clients($data);				
				if($res == '0')
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Gagal Disimpan!!!</div></div>';
				}
				else
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Berhasil Disimpan!!!</div></div>';
				}
				$this->load->vars($data);
				$this->menu_tambah_clients();
			}
		}
	}

	public function edit_clients()
	{		
		$this->form_validation->set_rules('nama','Nama Client','required');
		$this->form_validation->set_rules('ket','Keterangan','required');	
		$this->form_validation->set_message('required', '<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>%s Belum Diisi, Isi Terlebih Dahulu!!!</div></div>');
		$id=$this->input->post('id');
		$img_path=$this->input->post('path');
		$path='./assets/uploads/clients/';
		$this->configImg($path);
		if($this->form_validation->run() === FALSE)
		{			
			$data['dat']=$this->M_client->select_clients($id);
			$data['error']=$this->upload->display_errors();
			$data['title']='Halaman Dashboard Admin';
			$data['isi']='menu/backend/adm_clientsedit';			
			$this->load->view('layout/backend/wrapper',$data);
		}
		else
		{			
			if(!$this->upload->do_upload('img'))
			{
				$data=array
				(
					'nama'=>$this->input->post('nama'),
					'caption'=>$this->input->post('ket')					
				);
				$res = $this->M_client->update_clients($data,$id);
				if($res == '0')
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Gagal Disimpan!!!</div></div>';
				}
				else
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Berhasil Disimpan!!!</div></div>';
				}

				$data['dat']=$this->M_client->select_clients($id);
				$data['error']=$this->upload->display_errors();
				$data['title']='Halaman Dashboard Admin';
				$data['isi']='menu/backend/adm_clientsedit';				
				$this->load->view('layout/backend/wrapper',$data);
			}
			else
			{
				$fileinfo=$this->upload->data();
				$data=array
				(
					'nama'=>$this->input->post('nama'),
					'caption'=>$this->input->post('ket'),
					'path'=>$fileinfo['file_name']
				);
				@unlink('./assets/uploads/clients/'.$img_path);
				$res = $this->M_client->update_clients($data,$id);
				if($res == '0')
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Gagal Disimpan!!!</div></div>';
				}
				else
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Berhasil Disimpan!!!</div></div>';					
				}				
				$data['dat']=$this->M_client->select_clients($id);
				$data['error']=$this->upload->display_errors();
				$data['title']='Halaman Dashboard Admin';
				$data['isi']='menu/backend/adm_clientsedit';				
				$this->load->view('layout/backend/wrapper',$data);
			}
		}
	}

	public function delete_clients()
	{
		$id=$this->uri->segment(3);
		$img_path=$this->uri->segment(4);		
		unlink('./assets/uploads/clients/'.$img_path);
		$this->M_client->delete_clients($id);
		redirect('C_admin/menu_data_clients?sts=del_sukses');
	}

	//Insert, Update, Delete Banner
	public function add_banner()
	{
		$path='./assets/uploads/banner/';
		$this->configImg($path);
		if(!$this->upload->do_upload('img'))
		{
			$this->menu_tambah_banner();
		}
		else
		{
			$fileinfo=$this->upload->data();
			$data=array
			(
				'nama_banner'=>$this->input->post('judul'),
				'ket_banner'=>$this->input->post('isi'),
				'path_banner'=>$fileinfo['file_name']
			);
			$this->M_banner->insert_banner($data);
			redirect(base_url().'C_admin/menu_tambah_banner?sts=sukses','refresh');
		}
	}

	public function edit_banner()
	{
		$id=$this->input->post('id');
		$img_path=$this->input->post('path');
		$path='./assets/uploads/banner/';

		$this->configImg($path);
		if(!$this->upload->do_upload('img'))
		{
			$data=array
			(
				'nama_banner'=>$this->input->post('judul'),
				'ket_banner'=>$this->input->post('isi')				
			);
			$res = $this->M_banner->update_banner($data,$id);
			if($res == '0')
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Gagal Disimpan!!!</div></div>';
				}
				else
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Berhasil Disimpan!!!</div></div>';
				}
			$data['dat']=$this->M_banner->edit_banner($id);
			$data['title']='Halaman Dashboard Admin';
			$data['isi']='menu/backend/adm_editbanner';
			$data['error']=$this->upload->display_errors();
			$this->load->view('layout/backend/wrapper',$data);
		}
		else
		{
			$fileinfo=$this->upload->data();
			$data=array
			(
				'nama_banner'=>$this->input->post('judul'),
				'ket_banner'=>$this->input->post('isi'),
				'path_banner'=>$fileinfo['file_name']
			);
			$res = $this->M_banner->update_banner($data,$id);
			@unlink('./assets/uploads/banner/'.$img_path);
			if($res == '0')
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Gagal Disimpan!!!</div></div>';
				}
				else
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Berhasil Disimpan!!!</div></div>';
				}
			$data['dat']=$this->M_banner->edit_banner($id);
			$data['title']='Halaman Dashboard Admin';
			$data['isi']='menu/backend/adm_editbanner';
			$data['error']=$this->upload->display_errors();
			$this->load->view('layout/backend/wrapper',$data);
		}
	}

	public function delete_banner()
	{
		$id=$this->uri->segment(3);
		$img_path=$this->uri->segment(4);		
		unlink('./assets/uploads/banner/'.$img_path);
		$this->M_banner->delete_banner($id);
		redirect('C_admin/menu_ganti_banner?sts=del_sukses');
	}

	//Insert, Update, Delete Product
	public function add_product()
	{
		$this->form_validation->set_rules('nama','Nama Product','required');
		$this->form_validation->set_rules('ket','Keterangan Product','required');		
		$this->form_validation->set_message('required', '<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>%s Belum Diisi, Isi Terlebih Dahulu!!!</div></div>');
		$path='./assets/uploads/product/';
		$this->configImg($path);

		if($this->form_validation->run() === FALSE)
		{
			$this->menu_tambah_product();
		}
		else
		{
			if(!$this->upload->do_upload('img'))
			{
				$this->menu_tambah_product();
			}
			else
			{
				$fileinfo=$this->upload->data();
				$data=array
				(
					'kategori_product'=>$this->input->post('ktg'),
					'nama_product'=>$this->input->post('nama'),
					'ket_product'=>$this->input->post('ket'),
					'imgpath_product'=>$fileinfo['file_name']
				);
				$res = $this->M_product->insert_product($data);				
				if($res == '0')
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Gagal Disimpan!!!</div></div>';
				}
				else
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Berhasil Disimpan!!!</div></div>';
				}
				$this->load->vars($data);
				$this->menu_tambah_product();
			}
		}
	}
	
	public function edit_product()
	{
		$this->form_validation->set_rules('nama','Nama Product','required');
		$this->form_validation->set_rules('ket','Keterangan Product','required');		
		$this->form_validation->set_message('required', '<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>%s Belum Diisi, Isi Terlebih Dahulu!!!</div></div>');
		$id=$this->input->post('id');
		$img_path=$this->input->post('path');
		$path='./assets/uploads/product/';
		$this->configImg($path);
		if($this->form_validation->run() === FALSE)
		{
			$data['dat']=$this->M_product->edit_product($id);
			$data['title']='Halaman Dashboard Admin';
			$data['isi']='menu/backend/adm_productedit';
			$data['error']=$this->upload->display_errors();
			$this->load->view('layout/backend/wrapper',$data);
		}
		else
		{
			if(!$this->upload->do_upload('img'))
			{
				$data=array
				(
					'kategori_product'=>$this->input->post('ktg'),
					'nama_product'=>$this->input->post('nama'),
					'ket_product'=>$this->input->post('ket')
				);
				$res = $this->M_product->update_product($data,$id);
				if($res == '0')
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Gagal Disimpan!!!</div></div>';
				}
				else
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Berhasil Disimpan!!!</div></div>';
				}
				$data['dat']=$this->M_product->edit_product($id);
				$data['title']='Halaman Dashboard Admin';
				$data['isi']='menu/backend/adm_productedit';
				$data['error']=$this->upload->display_errors();
				$this->load->view('layout/backend/wrapper',$data);
			}
			else
			{
				$fileinfo=$this->upload->data();
				$data=array
				(
					'kategori_product'=>$this->input->post('ktg'),
					'nama_product'=>$this->input->post('nama'),
					'ket_product'=>$this->input->post('ket'),
					'imgpath_product'=>$fileinfo['file_name']
				);
				@unlink('./assets/uploads/product/'.$img_path);
				$res = $this->M_product->update_product($data,$id);
				if($res == '0')
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Gagal Disimpan!!!</div></div>';
				}
				else
				{
					$data['msg']='<div class="col-lg-12"><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Berhasil Disimpan!!!</div></div>';		
				}
				$data['dat']=$this->M_product->edit_product($id);
				$data['title']='Halaman Dashboard Admin';
				$data['isi']='menu/backend/adm_productedit';
				$data['error']=$this->upload->display_errors();
				$this->load->view('layout/backend/wrapper',$data);
			}
		}
	}

	public function delete_product()
	{
		$id=$this->uri->segment(3);
		$img_path=$this->uri->segment(4);		
		unlink('./assets/uploads/product/'.$img_path);
		$this->M_product->delete_product($id);
		redirect('C_admin/menu_data_product?sts=del_sukses');
	}

	//Pagination for data showcase
	public function srch_data_banner()
	{
		$srch = ($this->input->post('cari')) ? $this->input->post('cari') : 'NULL';
		$srch = ($this->uri->segment(3)) ? $this->uri->segment(3) : $srch;
		//pagination settings
		$config['base_url'] = site_url('C_admin/srch_data_banner/$srch');
	    $config['total_rows'] = $this->M_banner->count_banner($srch);
	    $config['per_page'] = "5";
	    $config["uri_segment"] = 4;
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
	    $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
	    $data['listdata'] = $this->M_banner->get_banner_data($config["per_page"], $data['page'], $srch);
	    $data['pagination'] = $this->pagination->create_links();
	    $data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_chgbann';
		$data['error']=$this->upload->display_errors();		
		$data['total']=$this->M_banner->count_banner($srch);
		$this->load->view('layout/backend/wrapper',$data);
	}

	public function srch_data_news()
	{
		$srch = ($this->input->post('cari')) ? $this->input->post('cari') : 'NULL';
		$srch = ($this->uri->segment(3)) ? $this->uri->segment(3) : $srch;
		//pagination settings
		$config['base_url'] = site_url('C_admin/srch_data_news/$srch');
	    $config['total_rows'] = $this->M_news->count_news($srch);
	    $config['per_page'] = "5";
	    $config["uri_segment"] = 4;
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
	    $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
	    $data['listdata'] = $this->M_news->get_news_data($config["per_page"], $data['page'], $srch);
	    $data['pagination'] = $this->pagination->create_links();
	    $data['error']=$this->upload->display_errors();		
		$data['total']=$this->M_news->count_news($srch);
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_newslist';
		$this->load->view('layout/backend/wrapper',$data);
	}

	public function srch_data_jobs()
	{
		$srch = ($this->input->post('cari')) ? $this->input->post('cari') : 'NULL';
		$srch = ($this->uri->segment(3)) ? $this->uri->segment(3) : $srch;
		//pagination settings
		$config['base_url'] = site_url('C_admin/srch_data_jobs/$srch');
	    $config['total_rows'] = $this->M_jobs->count_jobs($srch);
	    $config['per_page'] = "5";
	    $config["uri_segment"] = 4;
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
	    $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
	    $data['listdata'] = $this->M_jobs->get_jobs_data($config["per_page"], $data['page'], $srch);
	    $data['pagination'] = $this->pagination->create_links();
	    $data['total']=$this->M_jobs->count_jobs($srch);	  
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_joblist';
		$this->load->view('layout/backend/wrapper',$data);
	}

	public function srch_data_product()
	{
		$srch = ($this->input->post("cari")) ? $this->input->post("cari") : "NULL";
		$srch = ($this->uri->segment(3)) ? $this->uri->segment(3) : $srch;
		//pagination settings
		$config['base_url'] = site_url("C_admin/srch_data_product/$srch");
	    $config['total_rows'] = $this->M_product->count_product($srch);
	    $config['per_page'] = "5";
	    $config["uri_segment"] = 4;
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
	    $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
	    $data['listdata'] = $this->M_product->get_product_data($config["per_page"], $data['page'], $srch);
	    $data['pagination'] = $this->pagination->create_links();
	    $data['error']=$this->upload->display_errors();		
		$data['total']=$this->M_product->count_product($srch);
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_productdata';
		$this->load->view('layout/backend/wrapper',$data);	
	}

	public function srch_data_clients()
	{
		$srch = ($this->input->post("cari")) ? $this->input->post("cari") : "NULL";
		$srch = ($this->uri->segment(3)) ? $this->uri->segment(3) : $srch;
		//pagination settings
		$config['base_url'] = site_url("C_admin/srch_data_clients/$srch");
	    $config['total_rows'] = $this->M_client->count_clients($srch);
	    $config['per_page'] = "5";
	    $config["uri_segment"] = 4;
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
	    $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
	    $data['listdata'] = $this->M_client->get_clients_data($config["per_page"], $data['page'], $srch);
	    $data['pagination'] = $this->pagination->create_links();
	    $data['error']=$this->upload->display_errors();		
		$data['total']=$this->M_client->count_clients($srch);
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_clientsdata';
		$this->load->view('layout/backend/wrapper',$data);	
	}

	public function srch_data_applicant()
	{
		$srch = ($this->input->post("cari")) ? $this->input->post("cari") : "NULL";
		$srch = ($this->uri->segment(3)) ? $this->uri->segment(3) : $srch;
		//pagination settings
		$config['base_url'] = site_url("C_admin/srch_data_applicant/$srch");
	    $config['total_rows'] = $this->M_applicant->count_applicant($srch);
	    $config['per_page'] = "5";
	    $config["uri_segment"] = 4;
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
	    $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
	    $data['listdata'] = $this->M_applicant->get_applicant_data($config["per_page"], $data['page'], $srch);
	    $data['pagination'] = $this->pagination->create_links();
	    $data['error']=$this->upload->display_errors();		
		$data['total']=$this->M_applicant->count_applicant($srch);
		$data['title']='Halaman Dashboard Admin';
		$data['isi']='menu/backend/adm_applicantlist';
		$this->load->view('layout/backend/wrapper',$data);	
	}

	//change data account
	public function chg_password()
	{
		$this->form_validation->set_rules('password','Password','required');		
		$this->form_validation->set_message('required', '<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>%s Belum Diisi, Isi Terlebih Dahulu!!!</div></div>');
		$id=$this->session->userdata('id');
		if($this->form_validation->run() === FALSE)
		{
			$this->menu_data_account();
		}
		else
		{
			$pass=$this->input->post('password');
			$res=$this->M_account->chg_pass($id,$pass);
			if($res == '0')
			{
				$data['msg']='<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Gagal Disimpan!!!</div></div>';
			}
			else
			{
				$data['msg']='<div class="col-lg-12"><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Berhasil Disimpan!!!</div></div>';
			}
			$this->load->vars($data);
			$this->menu_data_account();
		}
	}

	public function chg_mail_contact()
	{
		$this->form_validation->set_rules('user_contact','Password','required');
		$this->form_validation->set_rules('pass_contact','Password','required');
		$this->form_validation->set_message('required', '<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>%s Belum Diisi, Isi Terlebih Dahulu!!!</div></div>');
		$id=$this->session->userdata('id');
		if($this->form_validation->run() === FALSE)
		{
			$this->menu_data_account();
		}
		else
		{
			$mail=$this->input->post('user_contact');
			$pass=$this->input->post('pass_contact');
			$res=$this->M_account->chg_mail_contact($id,$mail,$pass);
			if($res == '0')
			{
				$data['msg']='<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Gagal Disimpan!!!</div></div>';
			}
			else
			{
				$data['msg']='<div class="col-lg-12"><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Berhasil Disimpan!!!</div></div>';
			}
			$this->load->vars($data);
			$this->menu_data_account();
		}
	}

	public function chg_mail_hc()
	{
		$this->form_validation->set_rules('user_hc','Password','required');
		$this->form_validation->set_rules('pass_hc','Password','required');		
		$this->form_validation->set_message('required', '<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>%s Belum Diisi, Isi Terlebih Dahulu!!!</div></div>');
		$id=$this->session->userdata('id');
		if($this->form_validation->run() === FALSE)
		{
			$this->menu_data_account();
		}
		else
		{
			$mail=$this->input->post('user_hc');
			$pass=$this->input->post('pass_hc');
			$res=$this->M_account->chg_mail_hc($id,$mail,$pass);
			if($res == '0')
			{
				$data['msg']='<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Gagal Disimpan!!!</div></div>';
			}
			else
			{
				$data['msg']='<div class="col-lg-12"><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Data Berhasil Disimpan!!!</div></div>';
			}
			$this->load->vars($data);
			$this->menu_data_account();
		}
	}

	//download file
	public function download_file()
	{
		$filename=$this->uri->segment(3);
		 // load download helder
	    $this->load->helper('download');
	    // read file contents
	    $data = file_get_contents(base_url('./assets/applicants/'.$filename));
	    force_download($filename, $data);
	}
}