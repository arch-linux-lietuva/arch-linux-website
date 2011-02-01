<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	function index()
	{
		// Load views
		$this->load->view('posts/header.php');
		$this->load->view('posts/index.php');
		$this->load->view('posts/footer.php');
	}

	function view()
	{
		// Load views
		$this->load->view('posts/header.php');
		$this->load->view('posts/view.php');
		$this->load->view('posts/footer.php');
	}

	function admin_add()
	{
		// Load views
		$this->load->view('posts/admin/header.php');
		$this->load->view('posts/admin/admin_edit.php');
		$this->load->view('posts/admin/footer.php');
	}

	function admin_edit()
	{
		// Load views
		$this->load->view('posts/admin/header.php');
		$this->load->view('posts/admin/admin_edit.php');
		$this->load->view('posts/admin/footer.php');
	}

	function admin_view()
	{
		// Load views
		$this->load->view('posts/admin/header.php');
		$this->load->view('posts/admin/admin_view.php');
		$this->load->view('posts/admin/footer.php');
	}

	function admin_delete()
	{
		// Load views
		$this->load->view('posts/admin/header.php');
		$this->load->view('posts/admin/admin_delete.php');
		$this->load->view('posts/admin/footer.php');
	}
}

/* End of file posts.php */
/* Location: ./application/controllers/posts.php */
