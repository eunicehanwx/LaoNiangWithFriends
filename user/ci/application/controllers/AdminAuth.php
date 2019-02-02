<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class AdminAuth extends CI_Controller {
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
//		 $this->load->model("Blogmodel");
//		 $articles = $this->Blogmodel->get_articles_list();
//		 $data["articles"] = $articles;
		 $this->load->helper('url');
		 $this->load->view('admin/login');

	 }

	 public function logout() {
         unset($_SESSION);
         session_destroy();
         redirect("index.php/AdminAuth/login", "refresh");
     }

	 public function login() {
         if(isset($_POST['login_user'])) {
             $this->form_validation->set_rules('admin_username', 'Username', 'required');
             $this->form_validation->set_rules('admin_inputpassword', 'Password', 'required|min_length[5]');

             if ($this->form_validation->run() == TRUE) {
                 $admin_name = $_POST['admin_username'];
                 $admin_inputpassword = md5($_POST['admin_inputpassword']);

                 //check user in db
                 $this->db->select('*');
                 $this->db->from('admin');
                 $this->db->where(array('admin_name' => $admin_name, 'admin_password' => $admin_inputpassword));
                 $query = $this->db->get();

//                 echo 'hello';

                 $user = $query->row();
                 if ($user) {
                     $this->session->set_flashdata("success", "You are logged in");

                     $_SESSION['login_user'] = TRUE;
                     $_SESSION['admin_name'] = $user->admin_name;

                     redirect("index.php/AdminActivity/viewActivity/", "refresh");
                 } else {
                     echo 'no acc exist';
//                     $this->session->set_flashdata("error", "Your account has been created");
                     $this->session->set_flashdata("error", "Username or password wrong");
                     redirect("index.php/AdminAuth/login", "refresh");
                 }
             }
         }
         $this->load->view('admin/login');
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
/* End of file AdminController.php */
/* Location: ./application/controllers/AdminController.php */
