<?php
class recipe_Upload_model extends CI_Model{

    function get_activity(){
        $result = $this->db->get('activity');
        return $result;
    }

	function upload_image($c_id,$title,$image,$cuisine,$step,$ingredient){
		$data = array(
		    'client_id' => $c_id,
            'recipe_name'  => $title,
            'recipe_image' => $image,
            'recipe_cuisine' 	=> $cuisine,
            'recipe_step' 	=> $step,
            'recipe_ingredient' 	=> $ingredient,
            'recipe_status' => 'Pending',
            'badreview' => 0,
            'goodreview' => 0,
        );
		$result=$this->db->insert('recipe',$data);
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