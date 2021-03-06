<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AdminMain extends CI_Controller {
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
        if($_SESSION['login_user'] == FALSE) {
            $this->session->set_flashdata("error", "Please log in first");
            redirect("index.php/AdminAuth/login");
        }

        $this->load->database();
        $this->load->model('Adminmodel');
    }

    public function index()
    {
//        $data['activities']=$this->Adminmodel->get_activity_list();
//        $this->load->view('admin/status', $data);
    }

    public function test()
    {
        $this->load->helper('url');
//        $data['cui_rankings'] = $this->Adminmodel->get_cuisine_rank();
//        $data['cat_rankings'] = $this->Adminmodel->get_category_rank();
        $this->load->view('admin/economy-dashboard');
    }

    public function dashboard()
    {
        $this->load->helper('url');
        $data['cui_rankings'] = $this->Adminmodel->get_cuisine_rank();
        $data['cat_rankings'] = $this->Adminmodel->get_category_rank();
        $data['satisfaction'] = $this->Adminmodel->get_satisfaction();
        $this->load->view('admin/dashboard', $data);
    }
}