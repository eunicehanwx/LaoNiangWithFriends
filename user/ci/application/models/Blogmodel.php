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

    function get_articles_list(){
        $this->db->select('activity_name');
        $this->db->select('activity_id');
        $this->db->select('activity_venue');
        $this->db->select('activity_time');
        $this->db->select('activity_date');
        $this->db->select('activity_desc');
        $this->db->select('activity_fees');
        $this->db->select('activity_image');
//        $this->db->where('activity_status', 'pending');
        $query = $this->db->get('activity'); // put in the table name
        $result = $query->result();
        $list = Array();
        for ($i=0; $i<count($result); $i++)
        {
            $list[$i] = (object)NULL;
            $list[$i]->activityid = $result[$i]->activity_id;
            $list[$i]->activityname = $result[$i]->activity_name;
            $list[$i]->activityvenue = $result[$i]->activity_venue;
            $list[$i]->activitytime = $result[$i]->activity_time;
            $list[$i]->activitydate = $result[$i]->activity_date;
            $list[$i]->activitydesc = $result[$i]->activity_desc;
            $list[$i]->activityfees = $result[$i]->activity_fees;
            $list[$i]->activityimage = $result[$i]->activity_image;
        }
        return $list;
    }
    function get_articles_venue($field){
        $this->db->like('activity_venue',$field);
        $query = $this->db->get("activity");
        $result = $query->result();
        $list = Array();
        for ($i=0; $i<count($result); $i++)
        {
            $list[$i] = (object)NULL;
            $list[$i]->activityid = $result[$i]->activity_id;
            $list[$i]->activityname = $result[$i]->activity_name;
            $list[$i]->activityvenue = $result[$i]->activity_venue;
            $list[$i]->activitytime = $result[$i]->activity_time;
            $list[$i]->activitydate = $result[$i]->activity_date;
            $list[$i]->activitydesc = $result[$i]->activity_desc;
            $list[$i]->activityfees = $result[$i]->activity_fees;
            $list[$i]->activityimage = $result[$i]->activity_image;
        }
        return $list;
    }

    function get_distinct_venue_list(){
        $this->db->distinct('activity_venue');
        $query = $this->db->get("activity");
        $result = $query->result();
        $list = Array();
        for ($i=0; $i<count($result); $i++) {
            $list[$i] = (object)NULL;
            $list[$i]->activityvenue= $result[$i]->activity_venue;
        }
        return $list;
    }

    function get_activity_details($actid){
        $this->db->like('activity_id',$actid);
        $query = $this->db->get("activity");
        $result = $query->result();
        $list = Array();
        for ($i=0; $i<count($result); $i++)
        {
            $list[$i] = (object)NULL;
            $list[$i]->activityid = $result[$i]->activity_id;
            $list[$i]->activityname = $result[$i]->activity_name;
            $list[$i]->activityvenue = $result[$i]->activity_venue;
            $list[$i]->activitytime = $result[$i]->activity_time;
            $list[$i]->activitydate = $result[$i]->activity_date;
            $list[$i]->activitydesc = $result[$i]->activity_desc;
            $list[$i]->activitfees = $result[$i]->activity_fees;
            $list[$i]->activityimage = $result[$i]->activity_image;
        }
        return $list;
    }
}
?>
