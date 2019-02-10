<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class ClientStatusRecipe extends CI_Controller
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
             $user_data = $this->session->flashdata('client_email');
             redirect("index.php/ClientAuth/login");
         }

         $this->load->database();
         $this->load->model('Clientmodel');
     }

     public function index()
     {
//		 $this->load->model("Blogmodel");
//		 $articles = $this->Blogmodel->get_articles_list();
//		 $data["articles"] = $articles;

         $user_data = $_SESSION['client_id'];
         $this->load->helper('url');
         $arrayData = array(
             "recipes" => $this->Clientmodel->get_client_recipe_list($user_data),
         );
         $this->load->view('client/statusrecipe', $arrayData);

     }

     public function createActivity()
     {
         $this->load->helper('url');
//         $data['activities'] = $this->Adminmodel->get_activity_list();
         $this->load->view('admin/createActivity');

     }

     public function ajax_edit($id)
     {
         $data = $this->Adminmodel->get_by_id($id);
//        $data->dob = ($data->dob == '0000-00-00') ? '' : $data->dob; // if 0000-00-00 set tu empty for datepicker compatibility

         echo json_encode($data);
     }

     public function recipe_ajax_edit($id)
     {
         $data = $this->Clientmodel->recipe_get_by_id($id);
//        $data->dob = ($data->dob == '0000-00-00') ? '' : $data->dob; // if 0000-00-00 set tu empty for datepicker compatibility

         echo json_encode($data);
     }

     public function ajax_delete($id)
     {
          $this->Adminmodel->delete($id);
     }


     public function recipe_ajax_delete($id)
     {
         $this->Clientmodel->recipe_delete($id);
     }

     public function ajax_create ()
     {

         $data = array(
             'activity_id' => $this->Adminmodel->get_max_id(),
             'activity_name' => $this->input->post('activity_name'),
             'activity_category' => $this->input->post('activity_category'),
             'activity_venue' => $this->input->post('activity_venue'),
             'activity_time' => $this->input->post('activity_time'),
             'activity_date' => $this->input->post('activity_date'),
             'activity_desc' => $this->input->post('activity_desc'),
             'activity_fees' => $this->input->post('activity_fees'),
             'activity_mobile_num' => $this->input->post('activity_mobile_num'),
             'activity_image' => $this->input->post('activity_image'),
             'activity_status' => "pending",
         );
         $this->Adminmodel->create($data);
     }

     public function ajax_update()
     {
//         $this->_validate();
         $activity_id = $this->input->post('activity_id');

         $config['upload_path'] = "./assets/uploaded_image";
         $config['allowed_types']='gif|jpg|png';
         $this->load->library('upload',$config);
         if($this->upload->do_upload("file")) {
             $data = array('upload_data' => $this->upload->data());
         }

         $data = array(
             'activity_name' => $this->input->post('activity_name'),
             'activity_category' => $this->input->post('activity_category'),
             'activity_venue' => $this->input->post('activity_venue'),
             'activity_time' => $this->input->post('activity_time'),
             'activity_date' => $this->input->post('activity_date'),
             'activity_desc' => $this->input->post('activity_desc'),
             'activity_fees' => $this->input->post('activity_fees'),
             'activity_mobile_num' => $this->input->post('activity_mobile_num'),
             'activity_image' =>  $data['upload_data']['file_name'],
             'activity_status' => $this->input->post('activity_status'),
         );
         $this->Adminmodel->update($activity_id, $data);
     }

     public function ajax_recipe_update()
    {
//         $this->_validate();
     $recipe_id = $this->input->post('recipe_id');

     $config['upload_path'] = "./assets/uploaded_image";
     $config['allowed_types']='gif|jpg|png';
     $this->load->library('upload',$config);
     if($this->upload->do_upload("file")) {
         $data = array('upload_data' => $this->upload->data());
     }

     $data = array(
         'recipe_name' => $this->input->post('recipe_name'),
         'recipe_cuisine' => $this->input->post('recipe_cuisine'),
         'recipe_step' => $this->input->post('recipe_step'),
         'recipe_ingredient' => $this->input->post('recipe_ingredient'),
         'recipe_image' =>  $data['upload_data']['file_name'],
         'recipe_status' => "pending",
     );
     $this->Clientmodel->recipe_update($recipe_id, $data);
    }
 }
/* End of file AdminController.php */
/* Location: ./application/controllers/AdminController.php */
