<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model 
{

	var $title = null;
	var $body = null;
	var $publish = null;
	var $timestamp = null;

	function __construct()
	{
		parent::__construct();
	}

	function register()
	{
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->encrypt->sha1(
			$this->input->post('password')
		);

		$this->db->insert('users', $data);
	}

	function login()
	{
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->encrypt->sha1(
			$this->input->post('password')
		);

		$query = $this->db->get_where('users',array(
			'username' => $data['username'],
			'password' => $data['password']
			)
		);

		if ( $query->num_rows() == 1 )
		{
			$this->session->set_userdata('valid_user',true);
			return true;
		}
		
	}

	function logged()
	{
		if ( $this->session->userdata('valid_user' ) )
		{
			return true;
		}
		return false;
	}

	function logout()
	{
		$this->session->unset_userdata('valid_user');
	}

}

?>
