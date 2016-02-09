<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		$postits = $this->post->get_post_descriptions();
		$this->load->view('theposts', array("postits" => $postits));
	}

	public function add_post()
	{
		$this->post->add_post($this->input->post());
		redirect('/');
	}

}

/* End of file posts.php */
/* Location: ./application/controllers/posts.php */