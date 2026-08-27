<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial_model extends CI_Model
{
    protected $table = 'testimonials';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get published testimonials with pagination
     */
    public function get_published($limit = NULL, $offset = 0)
    {
        $query = $this->db->get_where(
            $this->table,
            ['status' => 'published'],
            $limit,
            $offset
        );

        return $query->result_array();
    }

    /**
     * Count published testimonials
     */
    public function count_published()
    {
        $this->db->where('status', 'published');
        return $this->db->count_all_results($this->table);
    }

    /**
     * Get testimonial by ID
     */
    public function get_by_id($id)
    {
        $query = $this->db->get_where($this->table, ['id' => $id]);
        return $query->row_array();
    }
}
