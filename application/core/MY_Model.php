<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model
{
	protected $table;
	
	public function __construct()
	{
		parent::__construct();
	}

    public function get($order_by = 'id') {
        $table = $this->table;
        $this->db->order_by($order_by);
        $query = $this->db->get($table);
        return $query;
    }

    public function get_with_limit($limit, $offset, $order_by) {
        $table = $this->table;
        $this->db->limit($limit, $offset);
        $this->db->order_by($order_by);
        $query = $this->db->get($table);
        return $query;
    }

    public function get_where($id) {
        $table = $this->table;
        $this->db->where('id', $id);
        $query = $this->db->get($table);
        return $query;
    }

    public function get_where_custom($col, $value) {
        $table = $this->table;
        $this->db->where($col, $value);
        $query = $this->db->get($table);
        return $query;
    }

    public function insert($data) {
        $table = $this->table;
        $this->db->insert($table, $data);
        return TRUE;
    }

    public function update($id, $data) {
        $table = $this->table;
        $this->db->where('id', $id);       
        return $this->db->update($table, $data);;
    }
    public function update_where($column, $value, $data) {
        $table = $this->table;
        $this->db->where($column, $value);
        return  $this->db->update($table, $data);
    }

    public function delete($id) {
        $table = $this->table;
        $this->db->where('id', $id);
        $this->db->delete($table);
        return TRUE;
    }

    public function delete_where($column,$value) {
        $table = $this->table;
        $this->db->where($column, $value);
        $this->db->delete($table);
        return TRUE;
    }

    public function count_where($column, $value) {
        $table = $this->table;
        $this->db->where($column, $value);
        $query = $this->db->get($table);
        $num_rows = $query->num_rows();
        return $num_rows;
    }

    public function count_all() {
        $table = $this->table;
        $query = $this->db->get($table);
        $num_rows = $query->num_rows();
        return $num_rows;
    }

    public function get_max() {
        $table = $this->table;
        $this->db->select_max('id');
        $query = $this->db->get($table);
        $row = $query->row();
        $id = $row->id;
        return $id;
    }

    public function custom_query($mysql_query) {
        $query = $this->db->query($mysql_query);
        return $query;
    }

}