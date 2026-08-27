<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio_model extends CI_Model
{
    protected $table = 'portfolio';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get all portfolio items with pagination
     */
    public function get_published($limit = NULL, $offset = 0)
    {
        $query = $this->db->limit($limit, $offset)->get($this->table);
        return $query->result_array();
    }

    /**
     * Count all portfolio items
     */
    public function count_published()
    {
        return $this->db->count_all($this->table);
    }

    /**
     * Get portfolio item by ID
     */
    public function get_by_id($id)
    {
        $query = $this->db->get_where($this->table, ['id' => $id]);
        return $query->row_array();
    }
}
