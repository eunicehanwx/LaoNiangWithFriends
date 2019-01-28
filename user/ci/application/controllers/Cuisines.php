<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Cuisines extends CI_Controller
    {
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
            $cuisine = $this->uri->segment(3);
            $this->load->model('cusinies_mdl');
            $cuisines = $this->cusinies_mdl->get_cusines_list($cuisine);

            $arrayData = array(
                "cuisines" => $cuisines
            );
//            echo "<script>alert($arrayData);</script>";
            $this->load->helper('url');
            $this->load->view('blog/TypeOfCusinines', $arrayData);
        }

    }
/* End of file Blog.php */
/* Location: ./application/controllers/blog.php */
