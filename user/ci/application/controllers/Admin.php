<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Blog extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * http://example.com/index.php/blog
	 * - or -
	 * http://example.com/index.php/blog/index
	 * - or -
	 * So any other public methods not prefixed with an underscore will
	 * map to /dashboard.html/blog/{method_name}
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

     public function __construct()
	 {
		parent::__construct();
		$this->load->database();
	 }

	 public function index()
	 {
		 $this->load->model("Blogmodel");
		 $articles = $this->Blogmodel->get_articles_list();
		 $data["articles"] = $articles;
		 $this->load->helper('url');
		 $this->load->view('blog/index',$data);

	 }
}
/* End of file Blog.php */
/* Location: ./application/controllers/blog.php */
