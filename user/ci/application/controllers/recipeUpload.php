<?php 
class recipeUpload extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('recipe_upload_model'); //load model upload model
		$this->load->library('upload'); //load library upload 
	}

    function index(){
        $data['activity'] = $this->recipe_upload_model->get_activity();
        $this->load->view('activity_view',$data);
    }

	function add_new(){
        $this->load->model('Clientmodel');
        $data['cuisines'] = $this->Clientmodel->get_cuisine();
		$this->load->view('client/registerRecipe', $data);
	}

	function do_upload(){
        $config['upload_path'] = "./assets/uploaded_image"; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //Allowing types
	    $config['encrypt_name'] = TRUE; //encrypt file name 

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){

	        if ($this->upload->do_upload('filefoto')){

	            $data   = $this->upload->data();
	            $image  = $data['file_name']; //get file name
                $title	= $this->input->post('title');
                $cuisine = $this->input->post('cuisine');
                $step = $this->input->post('step');
                $ingredient = $this->input->post('ingredient');
                $user_data = $_SESSION['client_id'];
                $this->recipe_upload_model->upload_image($user_data,$title,$image,$cuisine,$step,$ingredient);
                ?>
                <script type="text/javascript">
                    alert("Success");
                    top.location.href="<?php echo base_url('index.php/recipeUpload/add_new')?>";
                </script>
                <?php
//                $data = "<script type=\"text/javascript\">alert('Upload Successful');</script>";
			}else{
	            echo "Upload failed. Image file must be gif|jpg|png|jpeg|bmp";
                ?>
                <script type="text/javascript">
                    alert("Fail");
                    top.location.href="<?php echo base_url('index.php/recipeUpload/add_new')?>";
                </script>
                <?php
	        }
	    }else{
			echo "Failed, Image file is empty.";
            ?>
            <script type="text/javascript">
                alert("Fail");
                top.location.href="<?php echo base_url('index.php/recipeUpload/add_new')?>";
            </script>
            <?php
		}

	}


    function delete(){
        $activity_id = $this->uri->segment(3);
        $this->upload_model->delete($activity_id);
        redirect('upload');
    }

    function get_edit(){
        $activity_id = $this->uri->segment(3);
        $result = $this->upload_model->get_activity_id($activity_id);
        if($result->num_rows() > 0){
            $i = $result->row_array();
            $data = array(
                'activity_id'    => $i['activity_id'],
                'activity_name'  => $i['activity_name'],
                'activity_fees'     => $i['activity_fees']

            );
            $this->load->view('edit_activity_view',$data);
        }else{
            echo "Data Was Not Found";
        }
    }




    function update(){
        $activity_id = $this->input->post('activity_id');
        $title = $this->input->post('activity_name');
        $fee = $this->input->post('activity_fees');

        $config['upload_path'] = './resources/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //Allowing types
        $config['encrypt_name'] = TRUE; //encrypt file name
        $this->upload->initialize($config);


        if($_FILES['filefoto']['name']!="")
        {

            if ( ! $this->upload->do_upload('filefoto'))
            {
                echo "Upload Successful";
        }
            else
            {
                $data=$this->upload->data();
                $image=$data['file_name'];
            }
        }


        $this->upload_model->update($activity_id,$title,$fee,$image);
    }
	

}