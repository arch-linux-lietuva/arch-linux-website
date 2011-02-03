<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model', 'Users');
	}

	function _check_login()
	{
		if ( ! $this->Users->logged() )
		{
			redirect('/');
			exit;
		}
	}

	function index()
	{
		redirect('/');
		exit;
	}

	function login()
	{
		if ( $this->Users->logged() )
		{
			redirect('/posts/admin');
			exit;
		}

		$data = array();

		if ( $this->input->post('submit') )
		{

			if ( $this->Users->login() )
			{
				redirect('/posts/admin');
				exit;
			}
			else
			{
				$data['message'] = 'Vartotojas nerastas';
			}
		}

		$this->load->view('users/header');
		$this->load->view('users/login', $data);
		$this->load->view('users/footer');
	}

	function logout()
	{
		$this->Users->logout();
		redirect('/');
		exit;
	}

	function register()
	{
		$this->_check_login();

		if ( $this->input->post('submit') )
		{
			$this->Users->register();
			redirect('/');
			exit;
		}
		$this->load->view('users/header');
		$this->load->view('users/register');
		$this->load->view('users/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
