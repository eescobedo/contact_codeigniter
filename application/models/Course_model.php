<?php

class Course_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_courses($id = false)
    {
        if ($id === false) {
            $this->db->select('courses.name, courses.details, courses.created_at, courses.id, categories.name as category_name ');
            $this->db->order_by('courses.created_at', 'DESC');
            $this->db->join('categories', 'categories.id = courses.category_id');
            $query = $this->db->get('courses');
            return $query->result_array();
        }

        $query = $this->db->get_where('courses', array('id' => $id));

        return $query->row_array();
    }

    public function get_categories()
    {
        $this->db->order_by('name');
        $query = $this->db->get('categories');
        return $query->result_array();
    }

    public function create_course()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'details' => $this->input->post('details'),
            'schedule' => $this->input->post('schedule'),
            'price' => (float)$this->input->post('price'),
            'category_id' => (int)$this->input->post('category_id'),
            'created_at' => date('Y-m-d H:i:s'),
        );

        return $this->db->insert('courses', $data);
    }

    public function get_courses_by_category($category_id)
    {
        $this->db->select('courses.name, courses.details, courses.created_at, courses.id, categories.name as category_name ');
        $this->db->order_by('courses.created_at', 'DESC');
        $this->db->join('categories', 'categories.id = courses.category_id');
        $query = $this->db->get_where('courses', array('category_id' => $category_id));
        return $query->result_array();
    }

    public function update_course()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'details' => $this->input->post('details'),
            'schedule' => $this->input->post('schedule'),
            'price' => (float)$this->input->post('price'),
            'category_id' => (int)$this->input->post('category_id'),
            'created_at' => date('Y-m-d H:i:s'),
        );

        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('courses', $data);
    }

    public function delete_course($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('courses');

        return true;
    }

    public function get_courses_by_string()
    {
        $q = $this->input->post('q');

        $this->db->from('courses');
        $this->db->select('courses.name, courses.details, courses.created_at, courses.id, categories.name as category_name ');
        $this->db->order_by('courses.created_at', 'DESC');
        $this->db->join('categories', 'categories.id = courses.category_id');
        $this->db->like('courses.name', $q);
        $this->db->or_like('courses.details', $q);
        $query = $this->db->get();

        return $query->result_array();
    }
}
