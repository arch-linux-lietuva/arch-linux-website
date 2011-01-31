<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('post/front_page.php');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
