<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class cusinies_mdl extends CI_Model{
    /**
     * returns a list of articles
     * @return array
     */

    function __construct()
    {
        parent:: __construct();
    }

    function get_cusines_list($typeofcuisine){
        $this->db->select('recipe_id');
        $this->db->select('recipe_name');
        $this->db->select('recipe_cuisine');
        $this->db->select('recipe_image');
        $this->db->select('recipe_step');
        $this->db->select('recipe_status');
        $this->db->select('recipe_ingredient');
        $this->db->like('recipe_status', 'APPROVED');
        $this->db->where('recipe_cuisine',$typeofcuisine);
//        $this->db->where('activity_status', 'pending');
        $query = $this->db->get('recipe'); // put in the table name
        $result = $query->result();
        $list = Array();
        for ($i=0; $i<count($result); $i++)
        {
            $list[$i] = (object)NULL;
            $list[$i]->recipeid = $result[$i]->recipe_id;
            $list[$i]->recipename = $result[$i]->recipe_name;
            $list[$i]->recipecuisine = $result[$i]->recipe_cuisine;
            $list[$i]->recipeimage = $result[$i]->recipe_image;
            $list[$i]->recipestep = $result[$i]->recipe_step;
            $list[$i]->recipestatus = $result[$i]->recipe_status;
            $list[$i]->recipeingredient = $result[$i]->recipe_ingredient;
        }
        return $list;
    }

    function get_recipes_details($actid){
        $this->db->like('recipe_id',$actid);
        $query = $this->db->get("recipe");
        $result = $query->result();
        $list = Array();
        for ($i=0; $i<count($result); $i++)
        {
            $list[$i] = (object)NULL;
            $list[$i]->recipeid = $result[$i]->recipe_id;
            $list[$i]->recipename = $result[$i]->recipe_name;
            $list[$i]->recipecuisine = $result[$i]->recipe_cuisine;
            $list[$i]->recipeimage = $result[$i]->recipe_image;
            $list[$i]->recipestep = $result[$i]->recipe_step;
            $list[$i]->recipestatus = $result[$i]->recipe_status;
            $list[$i]->recipeingredient = $result[$i]->recipe_ingredient;
            $list[$i]->recipegood = $result[$i]->goodreview;
            $list[$i]->recipebad = $result[$i]->badreview;
        }
        return $list;
    }
}
?>
