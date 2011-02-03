<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();

		$this->load->model('Posts_model', 'Posts');
		$this->load->model('Users_model', 'Users');
	}

	function index()
	{
		$this->load->library('RSSParser', array('url' => 'http://www.archlinux.org/feeds/packages/', 'life' => 2));

		$data['rss'] = $this->rssparser->getFeed(15);

		$data['posts'] = $this->Posts->get_last_five_entries();


		$this->load->view('posts/header');
		$this->load->view('posts/index', $data);
		$this->load->view('posts/footer');
	}

	function view()
	{
		$this->load->view('posts/header');
		$this->load->view('posts/view');
		$this->load->view('posts/footer');
	}

	function _check_login()
	{
		if ( ! $this->Users->logged() )
		{
			redirect('/');
			exit;
		}
	}

	function admin()
	{

		$this->_check_login();
		
		$data['posts'] = $this->Posts->get_all();
		
		$this->load->view('posts/admin/header');
		$this->load->view('posts/admin/index', $data);
		$this->load->view('posts/admin/footer');
	}

	function admin_add()
	{

		$this->_check_login();

		if ( $this->input->post('submit') )
		{
			$this->Posts->add();
			redirect('/posts/admin');
			exit;
		}

		$this->load->view('posts/admin/header');
		$this->load->view('posts/admin/admin_edit');
		$this->load->view('posts/admin/footer');
	}

	function admin_edit()
	{
		$this->_check_login();

		$data = array();

		if ( $this->input->post('submit') )
		{
			$this->Posts->update();
			redirect('/posts/admin');
			exit;
		}

		if ( $this->input->get('id') )
		{
			$data['post'] = $this->Posts->get_one();
		}

		$this->load->view('posts/admin/header');
		$this->load->view('posts/admin/admin_edit', $data);
		$this->load->view('posts/admin/footer');
	}

	function admin_view()
	{
		$this->_check_login();

		$data['post'] = $this->Posts->get_one();
		
		$this->load->view('posts/admin/header');
		$this->load->view('posts/admin/admin_view', $data);
		$this->load->view('posts/admin/footer');
	}

	function admin_delete()
	{
		$this->_check_login();

		if ( $this->input->post('submit') )
		{
			$this->Posts->delete();
			redirect('/posts/admin');
			exit;
		}

		$data['id'] = $this->input->get('id');

		$this->load->view('posts/admin/header');
		$this->load->view('posts/admin/admin_delete', $data);
		$this->load->view('posts/admin/footer');
	}
}

/* End of file posts.php */
/* Location: ./application/controllers/posts.php */
