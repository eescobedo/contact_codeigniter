<?php

class Courses extends CI_Controller
{

    public function index()
    {
        $data['title'] = ucfirst('Ultimos Cursos');
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

        $data['categories'] = $this->course_model->get_categories();
        $data['title'] = $data['course']['name'];

        $this->load->view('templates/header');
        $this->load->view('courses/view', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['title'] = 'Crear curso';

        $data['categories'] = $this->course_model->get_categories();

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('details', 'Details', 'required');
        $this->form_validation->set_rules('schedule', 'Schedule', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');

        if ($this->form_validation->run() === false) {
            $this->load->view('templates/header');
            $this->load->view('courses/create', $data);
            $this->load->view('templates/footer');
        } else {
            $this->course_model->create_course();
            redirect('courses');
        }
    }

    public function edit($id)
    {
        $data['course'] = $this->course_model->get_courses($id);

        if (empty($data['course'])) {
            show_404();
        }

        $data['categories'] = $this->course_model->get_categories();

        $data['title'] = 'Editar curso';

        $this->load->view('templates/header');
        $this->load->view('courses/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $this->course_model->update_course();
        redirect('courses');
    }

    public function delete($id)
    {
        $this->course_model->delete_course($id);
        redirect('courses');
    }
}