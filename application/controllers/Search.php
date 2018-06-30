<?php

class Search extends CI_Controller
{
    public function view()
    {
        $data['title'] = 'Resultado de la búsqueda';
        $data['courses'] = $this->course_model->get_courses_by_string();

        $this->load->view('templates/header');
        $this->load->view('courses/index', $data);
        $this->load->view('templates/footer');
    }
}