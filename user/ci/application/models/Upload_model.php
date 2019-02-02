<?php
class Upload_model extends CI_Model{

    function get_activity(){
        $result = $this->db->get('activity');
        return $result;
    }

    function get_category() {
        $this->db->from('category');
        $query = $this->db->get();
        return $query->result();
    }

	function upload_image($title,$image,$category,$venue,$date,$time,$desc,$fee,$mobileno,$status,$c_id){
		$data = array(
            'activity_name'  => $title,
            'activity_image' => $image,
            'activity_category' 	=> $category,
            'activity_venue' 	=> $venue,
            'activity_date' 	=> $date,
            'activity_time' 	=> $time,
            'activity_desc' 	=> $desc,
            'activity_fees' 	=> $fee,
            'activity_mobile_num' 	=> $mobileno,
            'activity_status' 	=> $status,
            'client_id' => $c_id
         );
		$result=$this->db->insert('activity',$data);
		return $result;
	}

    function delete($activity_id){
        $this->db->where('activity_id', $activity_id);
        $this->db->delete('activity');
    }

    function get_activity_id($activity_id){
        $query = $this->db->get_where('activity', array('activity_id' => $activity_id));
        return $query;
    }

    function update($activity_id,$title,$fee,$image){
        $data = array(
            'activity_name'  => $title,
            'activity_fees' 	=> $fee,
            'activity_image' => $image,

        );
        $this->db->where('activity_id', $activity_id);
        $this->db->update('activity', $data);
    }
}