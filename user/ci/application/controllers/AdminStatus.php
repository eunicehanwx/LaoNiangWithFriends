<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class AdminStatus extends CI_Controller {
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
		 $this->load->view('admin/status');

	 }

    public function ajax_edit($id)
    {
        $data = $this->Adminmodel->get_by_id($id);
//        $data->dob = ($data->dob == '0000-00-00') ? '' : $data->dob; // if 0000-00-00 set tu empty for datepicker compatibility

        echo json_encode($data);
    }

    public function ajax_update()
    {
//        $this->_validate();
        $data = array(
//            'activity_id' => $this->input->post('activity_id'),
            'activity_name' => $this->input->post('activity_name'),
            'activity_category' => $this->input->post('activity_category'),
            'activity_venue' => $this->input->post('activity_venue'),
            'activity_time' => "",
            'activity_date' => "",
            'activity_desc' => $this->input->post('activity_desc'),
            'activity_fees' => $this->input->post('activity_fees'),
            'activity_mobile_num' => $this->input->post('activity_mobile_num'),
            'activity_image' => $this->input->post('activity_image'),
            'activity_status' => "",

        );
        $this->Adminmodel->update(array('activity_id' => $this->input->post('activity_id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if($this->input->post('activity_name') == '')
        {
            $data['inputerror'][] = 'activity_name';
            $data['error_string'][] = 'activity_name is required';
            $data['status'] = FALSE;
        }

//        if($this->input->post('lastName') == '')
//        {
//            $data['inputerror'][] = 'lastName';
//            $data['error_string'][] = 'Last name is required';
//            $data['status'] = FALSE;
//        }
//
//        if($this->input->post('dob') == '')
//        {
//            $data['inputerror'][] = 'dob';
//            $data['error_string'][] = 'Date of Birth is required';
//            $data['status'] = FALSE;
//        }
//
//        if($this->input->post('gender') == '')
//        {
//            $data['inputerror'][] = 'gender';
//            $data['error_string'][] = 'Please select gender';
//            $data['status'] = FALSE;
//        }
//
//        if($this->input->post('address') == '')
//        {
//            $data['inputerror'][] = 'address';
//            $data['error_string'][] = 'Addess is required';
//            $data['status'] = FALSE;
//        }

        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }


    }
/* End of file AdminController.php */
/* Location: ./application/controllers/AdminController.php */
