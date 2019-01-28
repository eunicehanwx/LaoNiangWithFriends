<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class activity_mdl extends CI_Model{
	/**
	 * returns a list of articles
	 * @return array
	 */

	function __construct()
	{
		parent:: __construct();
	}

//    function insert_image($file)
//    {
//        $this->db->set('activity_image', $file);
//        $this->db->where('activity_id', 2);
//        $this->db->update('activity');
//    }

    public function insert_image($image)
    {
        //get images from database
        // assign the data to an array
        $data = array(
            'activity_image' => $image
        );
        //insert image to the database
        $this->db->where('activity_id',1);
        $this->db->update('activity', $data);
    }

    function register($u_name, $u_tel_number, $act_id){
	    $data = array (
	        'user_name' => $u_name,
            'user_mobile_num' => $u_tel_number,
            'activity_id' => $act_id
        );
	    $this->db->insert('user', $data);
    }

}
