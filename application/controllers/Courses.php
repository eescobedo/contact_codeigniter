<?php

class Courses extends CI_Controller
{

    public function index()
    {
        $data['title'] = ucfirst('Latest courses');

        $data['courses'] = $this->course_model->get_courses();

        $this->load->view('templates/header');
        $this->load->view('courses/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug = null)
    {
        $data['course'] = $this->course_model->get_courses($slug);

        if (empty($data['course'])) {
            show_404();
        }

        $data['title'] = $data['course']['name'];

        $this->load->view('templates/header');
        $this->load->view('courses/view', $data);
        $this->load->view('templates/footer');
    }
}