<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Litlist_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        //this causes the database library to be autoloaded
        //loading of any other models would happen here   
    }

    public function get_litlist_items()
    {
        $sql = "SELECT * FROM `list`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_litlist_detail($id)
    {
        $sql = "SELECT * FROM `list` WHERE id = '" . $id . "'";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
}