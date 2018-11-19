<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_account extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}	

		public function get_usr_data($id)
		{
			$this->db->where('users.id_user',$id);
			$query=$this->db->get('users');
			return $query->row_array();
		}

		public function chg_pass($id, $password)
		{
			$data=array ("password"=>$password);			
			$this->db->where('users.id_user',$id);
			$this->db->update('users',$data);
			if($this->db->affected_rows())
			{
				return '1';
			}
			else
			{
				return '0';
			}
		}

		public function chg_mail_contact($id, $mail, $password)
		{
			$data=array ("pass"=>$password,"mail"=>$mail);		
			$this->db->where('users.id_user',$id);
			$this->db->update('users',$data);
			if($this->db->affected_rows())
			{
				return '1';
			}
			else
			{
				return '0';
			}
		}

		public function chg_mail_hc($id, $mail, $password)
		{
			$data=array ("hc_pass"=>$password,"hc_mail"=>$mail);		
			$this->db->where('users.id_user',$id);
			$this->db->update('users',$data);
			if($this->db->affected_rows())
			{
				return '1';
			}
			else
			{
				return '0';
			}
		}
	}
?>