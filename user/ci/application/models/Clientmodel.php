<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Clientmodel extends CI_Model{
    /**
     * returns a list of articles
     * @return array
     */

    function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    function get_client_list()
    {
        //do soft delete https://forum.codeigniter.com/archive/index.php?thread-43130.html

        $this->db->from('client');
        $query=$this->db->get();
        return $query->result();
    }

    function get_client_activity_list($client_id)
    {
        //do soft delete https://forum.codeigniter.com/archive/index.php?thread-43130.html

        $this->db->like('client_id',$client_id);
        $this->db->from('activity');
        $query=$this->db->get();
        return $query->result();
    }

    public function get_by_id($id)
    {
        $this->db->from('activity');
        $this->db->where('activity_id',$id);
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

    public function create($data)
    {
        $this->db->insert('activity', $data);
    }

    public function update($where, $data)
    {
        $this->db->where('activity_id', $where);
        $this->db->update('activity', $data);
    }

    public function delete($where)
    {
        $this->db->where('activity_id', $where);
        $this->db->delete('activity');
    }

}

