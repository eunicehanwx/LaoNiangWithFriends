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

         if(isset($_POST['btnCreateClient'])) {
             $this->form_validation->set_rules('client_name', 'Name', 'required');
             $this->form_validation->set_rules('client_email', 'Email', 'required');
             $this->form_validation->set_rules('client_mobile_num', 'Mobile Num', 'required');
             $this->form_validation->set_rules('client_dept', 'Department', 'required');
             $this->form_validation->set_rules('client_org', 'Organization', 'required');
             $this->form_validation->set_rules('client_password', 'Password', 'required|min_length[5]');
             $this->form_validation->set_rules('client_cfm_password', 'Confirm Password', 'required|min_length[5]|matches[client_password]');

             if ($this->form_validation->run() == TRUE) {
//                 echo 'form validated';

                 $client_email = $_POST['client_email'];

                 $this->db->select('*');
                 $this->db->from('client');
                 $this->db->where('client_email',$client_email);
                 $query=$this->db->get();

                 $user = $query->row();

                 if (!$user) {
                     $data = array(
                         'client_name' => $_POST['client_name'],
                         'client_email' => $_POST['client_email'],
                         'client_mobile_num' => $_POST['client_mobile_num'],
                         'client_dept' => $_POST['client_dept'],
                         'client_org' => $_POST['client_org'],
                         'client_password' => $_POST['client_cfm_password']
                     );
                     $this->db->insert('client', $data);

                     $this->session->set_flashdata("success", "Your account has been created");
                     redirect("index.php/AdminManageClient/createClient", "refresh");
                 } else {
                     $this->session->set_flashdata("error", "This email has already been registered");
                 }
             }
         }

         $this->load->helper('url');
//         $data['clients'] = $this->Adminmodel->get_client_list();
         $this->load->view('admin/createClient');

     }

     public function registerClient() {

         if(isset($_POST['btnCreateClient'])) {
             $this->form_validation->set_rules('client_name', 'Name', 'required');
             $this->form_validation->set_rules('client_email', 'Email', 'required');
             $this->form_validation->set_rules('client_mobile_num', 'Mobile Num', 'required');
             $this->form_validation->set_rules('client_dept', 'Department', 'required');
             $this->form_validation->set_rules('client_org', 'Organization', 'required');
             $this->form_validation->set_rules('client_password', 'Password', 'required|min_length[5]');
             $this->form_validation->set_rules('client_cfm_password', 'Confirm Password', 'required|min_length[5]|matches[client_password]');

             if ($this->form_validation->run() == TRUE) {
//                 echo 'form validated';

                 $client_email = $_POST['client_email'];

                 $this->db->select('*');
                 $this->db->from('client');
                 $this->db->where('client_email',$client_email);
                 $query=$this->db->get();

                 $user = $query->row();

                 if (!$user) {
                     $data = array(
                         'client_name' => $_POST['client_name'],
                         'client_email' => $_POST['client_email'],
                         'client_mobile_num' => $_POST['client_mobile_num'],
                         'client_dept' => $_POST['client_dept'],
                         'client_org' => $_POST['client_org'],
                         'client_password' => md5($_POST['client_cfm_password'])
                     );
                     $this->db->insert('admin', $data);

                     $this->session->set_flashdata("success", "Your account has been created");
                     redirect("index.php/AdminAuth/register", "refresh");
                 } else {
                     $this->session->set_flashdata("error", "This email has already been registered");
                 }
             }
         }
         $this->load->view('admin/createClient');
     }
 }
