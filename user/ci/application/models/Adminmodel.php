<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Adminmodel extends CI_Model{
    /**
     * returns a list of articles
     * @return array
     */

    function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    function get_satisfaction() {
        $this->db->select('SUM(badreview) AS  badReview, SUM(goodreview) AS goodReview', false);
        $this->db->from('recipe');

        $query = $this->db->get()->result();

        $list = Array();

        for ($i=0; $i<count($query); $i++)
        {
            $list[$i] = (object)NULL;
            $list[$i]->goodReview = $query[$i]->goodReview;
            $list[$i]->badReview = $query[$i]->badReview;
        }

        return $list;
    }
    function get_total_activity() {
            $this->db->select('activity_category, count(activity_category) AS count', false);
            $this->db->from('activity');
            $query = $this->db->get()->result();

            $list = Array();

            for ($i=0; $i<count($query); $i++)
            {
                $list[$i] = (object)NULL;
                $list[$i]->activitycategory = $query[$i]->activity_category;
                $list[$i]->count = $query[$i]->count;
            }

            return $list;
        }

    function get_category_rank() {
        $this->db->select('activity_category, count(activity_category) AS count', false);
        $this->db->from('activity');
        $this->db->group_by('activity_category');
        $this->db->order_by("count", "desc");
        $query = $this->db->get()->result();

        $list = Array();

        for ($i=0; $i<count($query); $i++)
        {
            $list[$i] = (object)NULL;
            $list[$i]->activitycategory = $query[$i]->activity_category;
            $list[$i]->count = $query[$i]->count;
        }

        return $list;
    }

    function get_cuisine_rank() {
        $this->db->select('recipe_cuisine, count(recipe_cuisine) AS count', false);
        $this->db->from('recipe');
        $this->db->group_by('recipe_cuisine');
        $this->db->order_by("count", "desc");
        $query = $this->db->get()->result();

        $list = Array();

        for ($i=0; $i<count($query); $i++)
        {
            $list[$i] = (object)NULL;
            $list[$i]->recipecuisine = $query[$i]->recipe_cuisine;
            $list[$i]->count = $query[$i]->count;
        }

        return $list;
    }

    function get_cuisine_list()
    {
        //do soft delete https://forum.codeigniter.com/archive/index.php?thread-43130.html

        $this->db->from('cuisine');
        $query=$this->db->get();
        return $query->result();
    }

    function get_recipe_list()
    {
        //do soft delete https://forum.codeigniter.com/archive/index.php?thread-43130.html

        $this->db->from('recipe');
        $query=$this->db->get();
        return $query->result();
    }

    function get_client_list()
    {
        //do soft delete https://forum.codeigniter.com/archive/index.php?thread-43130.html

        $this->db->from('client');
        $query=$this->db->get();
        return $query->result();
    }

    function get_category_list()
    {
        //do soft delete https://forum.codeigniter.com/archive/index.php?thread-43130.html

        $this->db->from('category');
        $query=$this->db->get();
        return $query->result();
    }

    function get_activity_list()
    {
        //do soft delete https://forum.codeigniter.com/archive/index.php?thread-43130.html

        $this->db->from('activity');
        $query=$this->db->get();
        return $query->result();
    }

    public function get_by_id($id, $table, $col)
    {
        $this->db->from($table);
        $this->db->where($col,$id);
        $query = $this->db->get();

//        echo $id;
        return $query->row();
    }

    public function get_max_id()
    {
        $maxid = 0;
        $row = $this->db->query('SELECT MAX(activity_id) AS "maxid" FROM activity')->row();
        if ($row) {
            $maxid = $row->maxid+1;
        }

        return $maxid;
    }

    public function create($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update($where, $data, $table, $col)
    {
        $this->db->where($col, $where);
        $this->db->update($table, $data);
    }

    public function delete($where, $table, $col)
    {
        $this->db->where($col, $where);
        $this->db->delete($table);
    }

    public function activity_delete($where)
    {
        $data = array(
            'activity_status' => "DELETED",
        );
        $this->db->where('activity_id', $where);
        $this->db->update('activity',$data);
    }

    public function catCreate($data)
    {
        $this->db->insert('category', $data);
    }


}

