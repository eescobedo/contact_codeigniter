<?php

class Categories extends CI_Controller
{
    public function index()
    {
        $data['title'] = ucfirst('Latest categories');

        $data['categories'] = $this->categories_model->get_categories();

        $this->load->view('templates/header');
        $this->load->view('categories/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id = null)
    {
        $data['category'] = $this->categories_model->get_categories($id);

        if (empty($data['category'])) {
            show_404();
        }

        $data['title'] = $data['category']['name'];

        $this->load->view('templates/header');
        $this->load->view('categories/view', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['title'] = 'Crear categoría';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('details', 'Details', 'required');

        if ($this->form_validation->run() === false) {
            $this->load->view('templates/header');
            $this->load->view('categories/create', $data);
            $this->load->view('templates/footer');
        } else {
            $this->categories_model->set_category();
            redirect('categories');
        }
    }

    public function delete($id)
    {
        $this->categories_model->delete_category($id);
        redirect('categories');
    }

    public function edit($id)
    {
        $data['category'] = $this->categories_model->get_categories($id);

        if (empty($data['category'])) {
            show_404();
        }

        $data['title'] = 'Edit category';

        $this->load->view('templates/header');
        $this->load->view('categories/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $this->categories_model->update_post();
        redirect('categories');

    }
}