<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class AdminManageClient extends CI_Controller
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
//		parent::__construct();
//		$this->load->database();

         parent::__construct();
         if ($_SESSION['login_user'] == FALSE) {
             $this->session->set_flashdata("error", "Please log in first");
             redirect("index.php/AdminAuth/login");
         }

         $this->load->database();
         $this->load->model('Adminmodel');
     }

     public function viewClient()
     {
         $this->load->helper('url');
         $data['clients'] = $this->Adminmodel->get_client_list();
         $this->load->view('admin/clientProfile', $data);

     }

     public function createClient()
     {
         $this->load->helper('url');
//         $data['clients'] = $this->Adminmodel->get_client_list();
         $this->load->view('admin/createClient');

     }

     public function register() {

         if(isset($_POST['reg_user'])) {
             $this->form_validation->set_rules('admin_username', 'Username', 'required');
             $this->form_validation->set_rules('admin_email', 'Email', 'required');
             $this->form_validation->set_rules('admin_inputpassword', 'Password', 'required|min_length[5]');
             $this->form_validation->set_rules('admin_confirmpassword', 'Confirm Password', 'required|min_length[5]|matches[admin_inputpassword]');

             if ($this->form_validation->run() == TRUE) {
//                 echo 'form validated';

                 $admin_email = $_POST['admin_email'];

                 $this->db->select('*');
                 $this->db->from('admin');
                 $this->db->where('admin_email',$admin_email);
                 $query=$this->db->get();

                 $user = $query->row();

                 if (!$user) {
                     $data = array(
                         'admin_name' => $_POST['admin_username'],
                         'admin_email' => $_POST['admin_email'],
                         'admin_password' => md5($_POST['admin_confirmpassword'])
                     );
                     $this->db->insert('admin', $data);

                     $this->session->set_flashdata("success", "Your account has been created");
                     redirect("index.php/AdminAuth/register", "refresh");
                 } else {
                     $this->session->set_flashdata("error", "This email has already been registered");
                 }
             }
         }
         $this->load->view('admin/register');
     }
 }
