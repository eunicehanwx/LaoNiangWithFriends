<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class AdminRecipe extends CI_Controller
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

     public function viewRecipe()
     {
//		 $this->load->model("Blogmodel");
//		 $articles = $this->Blogmodel->get_articles_list();
//		 $data["articles"] = $articles;
         $this->load->helper('url');
         $data['recipes'] = $this->Adminmodel->get_recipe_list();
         $this->load->view('admin/viewRecipe', $data);
     }

     public function createRecipe()
     {
//		 $this->load->model("Blogmodel");
//		 $articles = $this->Blogmodel->get_articles_list();
//		 $data["articles"] = $articles;
         $this->load->helper('url');
         $data['cuisines'] = $this->Adminmodel->get_cuisine_list();
         $this->load->view('admin/createRecipe', $data);

     }

     public function ajax_edit($id)
     {
         $data = $this->Adminmodel->get_by_id($id, 'recipe', 'recipe_id');
//        $data->dob = ($data->dob == '0000-00-00') ? '' : $data->dob; // if 0000-00-00 set tu empty for datepicker compatibility

         echo json_encode($data);
     }

     public function ajax_delete($id)
     {
          $this->Adminmodel->delete($id, 'recipe', 'recipe_id');
     }

     public function ajax_create()
     {

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
             'recipe_image' =>  $data['upload_data']['file_name'],
             'recipe_step' => $this->input->post('recipe_step'),
             'recipe_ingredient' => $this->input->post('recipe_ingredient'),
             'recipe_status' => "pending",
         );
         $this->Adminmodel->create($data, 'recipe');
     }

     public function ajax_update()
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
//             'activity_image' =>  $data['upload_data']['file_name'],
             'recipe_step' => $this->input->post('recipe_step'),
             'recipe_ingredient' => $this->input->post('recipe_ingredient'),
             'recipe_status' => $this->input->post('recipe_status'),
         );
         $this->Adminmodel->update($recipe_id, $data, 'recipe', 'recipe_id');
     }

     public function ajax_update_delete($id)
     {
//         $this->_validate();
//         $recipe_id = $this->input->post('recipe_id');

         $data = array(
             'recipe_status' => "DELETED",
         );
         $this->Adminmodel->update($id, $data, 'recipe', 'recipe_id');
     }
 }
/* End of file AdminController.php */
/* Location: ./application/controllers/AdminController.php */
