<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Blog extends CI_Controller
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
            $filter = $this->input->post('filter');
            $field = $this->input->post('field');

            if (isset($filter) && ($field != "")) {
                $this->load->model('Blogmodel');
                $articles = $this->Blogmodel->get_articles_venue($field);
            } else {
                $this->load->model('Blogmodel');
                $articles = $this->Blogmodel->get_articles_list();
            }

            $arrayData = array(
                "articles" => $articles,
                "dropdownvenue" => $this->Blogmodel->get_distinct_venue_list()
            );

            $this->load->helper('url');
            $this->load->view('blog/index', $arrayData);
        }

        public function activitydetails()
        {
            $actid = $this->input-> post('activity_id');
            $this->load->model('Blogmodel');
            $records = $this->Blogmodel->get_activity_details($actid);
            $activity = $records;

            echo json_encode($activity);

//            $this->load->model('Blogmodel');
//            $activitydetails = $this->Blogmodel->get_activity_details($actid);
//
//             $arrayData = array(
//                 "activitydetails" => $activitydetails
//             );
//            return $arrayData;
        }

    }
/* End of file Blog.php */
/* Location: ./application/controllers/blog.php */
