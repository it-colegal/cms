<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial_model extends CI_Model
{
    /**
     * Nama tabel.
     *
     * @var string
     */
    protected $table = 'testimonials';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Mengambil seluruh testimonial.
     *
     * @return array
     */
    public function get_all()
    {
        return $this->db
            ->select('*')
            ->from($this->table)
            ->order_by('sort_order', 'ASC')
            ->get()
            ->result_array();
    }

    /**
     * Mengambil testimonial berdasarkan ID.
     *
     * @param int $id
     * @return array|null
     */
    public function get_by_id($id)
    {
        return $this->db
            ->select('*')
            ->from($this->table)
            ->where('id', (int) $id)
            ->limit(1)
            ->get()
            ->row_array();
    }

    /**
     * Menghitung jumlah testimonial.
     *
     * @return int
     */
    public function count()
    {
        return $this->db
            ->count_all($this->table);
    }
}