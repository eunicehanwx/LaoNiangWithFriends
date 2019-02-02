<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class AdminActivity extends CI_Controller
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

     public function viewActivity()
     {
//		 $this->load->model("Blogmodel");
//		 $articles = $this->Blogmodel->get_articles_list();
//		 $data["articles"] = $articles;
         $this->load->helper('url');
         $data['activities'] = $this->Adminmodel->get_activity_list();
         $this->load->view('admin/status', $data);

     }

     public function viewActivityCat()
     {
         $this->load->helper('url');
         $data['categories'] = $this->Adminmodel->get_category_list();
         $this->load->view('admin/viewActivityCat', $data);

     }

     public function createActivityCat()
     {
         $this->load->helper('url');
//         $data['activities'] = $this->Adminmodel->get_activity_list();
         $this->load->view('admin/createActivityCat');

     }

     public function ajax_cat_edit($id)
     {
         $data = $this->Adminmodel->get_by_id($id, 'category', 'category_id');
//        $data->dob = ($data->dob == '0000-00-00') ? '' : $data->dob; // if 0000-00-00 set tu empty for datepicker compatibility

         echo json_encode($data);
     }

     public function ajax_cat_update()
     {
//         $this->_validate();
         $category_id = $this->input->post('category_id');


         $data = array(
             'category_name' => $this->input->post('category_name')
         );
         $this->Adminmodel->update($category_id, $data, 'category', 'category_id');
     }

     public function ajax_cat_delete($id)
     {
         $this->Adminmodel->delete($id, 'category', 'category_id');
     }

     public function ajax_cat_create ()
     {
         $data = array(
             'category_name' => $this->input->post('category_name')
         );
         $this->Adminmodel->catCreate($data);
     }


     public function createActivity()
     {
         $this->load->helper('url');
//         $data['activities'] = $this->Adminmodel->get_activity_list();
         $this->load->view('admin/createActivity');

     }

     public function ajax_edit($id)
     {
         $data = $this->Adminmodel->get_by_id($id, 'activity', 'activity_id');
//        $data->dob = ($data->dob == '0000-00-00') ? '' : $data->dob; // if 0000-00-00 set tu empty for datepicker compatibility

         echo json_encode($data);
     }

     public function ajax_delete($id)
     {
          $this->Adminmodel->delete($id, 'activity', 'activity_id');
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


         $data = array(
             'activity_name' => $this->input->post('activity_name'),
             'activity_category' => $this->input->post('activity_category'),
             'activity_venue' => $this->input->post('activity_venue'),
             'activity_time' => $this->input->post('activity_time'),
             'activity_date' => $this->input->post('activity_date'),
             'activity_desc' => $this->input->post('activity_desc'),
             'activity_fees' => $this->input->post('activity_fees'),
             'activity_mobile_num' => $this->input->post('activity_mobile_num'),
             'activity_image' => $this->input->post('activity_image'),
             'activity_status' => $this->input->post('activity_status'),
         );
         $this->Adminmodel->update($activity_id, $data);
     }
 }
/* End of file AdminController.php */
/* Location: ./application/controllers/AdminController.php */
