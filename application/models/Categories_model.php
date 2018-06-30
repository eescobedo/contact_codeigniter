<?php

class Categories_model extends CI_Model
{

    /**
     * Categories_model constructor.
     */
    public function __construct()
    {
        $this->load->database();
    }

    public function get_categories($id = false)
    {
        if ($id === false) {
            $this->db->order_by('created_at', 'DESC');
            $query = $this->db->get('categories');
            return $query->result_array();
        }

        $query = $this->db->get_where('categories', array('id' => $id));
        return $query->row_array();
    }

    public function set_category()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'details' => $this->input->post('details'),
            'created_at' => date('Y-m-d H:i:s'),
            'status' => (int)$this->input->post('status')
        );

        return $this->db->insert('categories', $data);
    }

    public function delete_category($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('categories');

        return true;
    }

    public function update_post()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'details' => $this->input->post('details'),
            'created_at' => date('Y-m-d H:i:s'),
            'status' => (int)$this->input->post('status')
        );

        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('categories', $data);
    }

    public function get_category($id)
    {
        $query = $this->db->get_where('categories', array('id' =>$id));
        return $query->row();
    }
}