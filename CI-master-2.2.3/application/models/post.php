<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Model {

	public function get_post_descriptions()
	{
		$query = "SELECT * FROM posts";
		$postits = $this->db->query($query)->result_array();
		return $this->db->query($query)->result_array();
	}

	public function add_post($post)
	{
		$query = "INSERT INTO posts (description, created_at, updated_at) VALUES (?, NOW(), NOW())";
		$values = $post['description'];
		$this->db->query($query, $values);
	}

}

/* End of file post.php */
/* Location: ./application/controllers/post.php */