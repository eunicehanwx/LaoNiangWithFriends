<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class activity_ctl extends CI_Controller
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
            $this->load->library('session');
            $this->load->library('form_validation');


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

            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->view('activity/activity_main', $arrayData);
        }

        public function activitydetails()
        {
            $actid = $this->input-> post('activity_id');
            $this->load->model('Blogmodel');
            $records = $this->Blogmodel->get_activity_details($actid);
            $activity = $records;

            echo json_encode($activity);
        }

        public function activity()
        {
            $this->load->helper('url');
            $this->load->view('activity/activity_main');
        }

        public function insert_img()
        {
            if(isset($_POST["insert"])) {
                $img= $_FILES['test']['name'];
                $data = base64_encode($img);
                $this->load->model('activity_mdl');
                $this->activity_mdl->insert_image($data);
            }
        }

        public function add_image()
        {
                $config['upload_path'] = './assets/uploaded_image';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2048000'; // max size in KB
                $config['max_width'] = '20000'; //max resolution width
                $config['max_height'] = '20000';  //max resolution height
                // load CI libarary called upload
                $this->load->library('upload', $config);
                // body of if clause will be executed when image uploading is failed
                if(!$this->upload->do_upload()){
                    $errors = array('error' => $this->upload->display_errors());
                    // This image is uploaded by deafult if the selected image in not uploaded
                    $image = 'no_image.png';
                }
                // body of else clause will be executed when image uploading is succeeded
                else{
                    $data = array('upload_data' => $this->upload->data());
                    $image = $_FILES['userfile']['name'];  //name must be userfile

                }
                $this->load->model('activity_mdl');
                $this->activity_mdl->insert_image($image);
        }

        public function register_user(){

                $name = $this->input->post('name');
                $phone = $this->input->post('phone');
                $actid = $this->input->post('actid');


                $this->load->model('activity_mdl');
                $this->activity_mdl->register($name, $phone, $actid);

                echo ('Successfully registered');

        }

    }
/* End of file Blog.php */
/* Location: ./application/controllers/blog.php */
