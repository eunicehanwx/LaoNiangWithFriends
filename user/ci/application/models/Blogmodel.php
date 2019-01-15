<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blogmodel extends CI_Model{
	/**
	 * returns a list of articles
	 * @return array
	 */

	function __construct()
	{
		parent:: __construct();
	}

	//get activity list
	function get_articles_list(){
		$this->db->select('activity_name');
		$this->db->select('activity_category');
		$this->db->select('activity_venue');
		$this->db->select('activity_time');
		$this->db->select('activity_date');
		$this->db->select('activity_desc');
		$this->db->select('activity_fees');
		$this->db->select('activity_mobile_num');
		$this->db->select('activity_image');
		$this->db->select('activity_status');

		$query = $this->db->get('activity'); // put in the table name
		$result = $query->result();
		$list = Array();
		for ($i=0; $i<count($result); $i++)
		{
			$list[$i] = (object)NULL;
			$list[$i]->activityname = $result[$i]->activity_name;
			$list[$i]->activityvenue = $result[$i]->activity_venue;
			$list[$i]->activityvenue = $result[$i]->activity_category;
			$list[$i]->activitytime = $result[$i]->activity_time;
			$list[$i]->activitydate = $result[$i]->activity_date;
			$list[$i]->activitydesc = $result[$i]->activity_desc;
			$list[$i]->activitfees = $result[$i]->activity_fees;
			$list[$i]->activitfees = $result[$i]->activity_mobile_num;
			$list[$i]->activitfees = $result[$i]->activity_image;
			$list[$i]->activitfees = $result[$i]->activity_status;
		}
		return $list;
	}
}
?>
