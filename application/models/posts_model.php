<?php

class Posts_model extends CI_Model 
{

	var $title = null;
	var $body = null;
	var $publish = null;
	var $timestamp = null;

	function __construct()
	{
		parent::__construct();
	}

	function get_last_five_entries()
	{
		$query = $this->db->get_where(
			'posts',
			array (
				'publish' => 1
				),
			5
			);
		return $query->result();
	}

	function get_all()
	{
		$query = $this->db->get('posts');
		return $query->result();
	}

	function get_one()
	{
		$query = $this->db->get_where(
			'posts', 
			array(
				'id' => $this->input->get('id')
			)
		);
		return $query->row();
	}

	function add ( )
	{
		$this->title = $this->input->post('title');
		$this->body = $this->input->post('body');
		$this->publish = $this->input->post('publish');

		$this->db->insert('posts', $this);
		return;
	}

	function update ()
	{
		$this->title = $this->input->post('title');
		$this->body = $this->input->post('body');
		$this->publish = $this->input->post('publish');

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('posts', $this);
	}


	function delete ()
	{
		$this->db->where('id', $this->input->post('id'));
		$this->db->delete('posts');
	}

}

?>
