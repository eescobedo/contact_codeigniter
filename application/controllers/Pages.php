<?php

class Pages extends CI_Controller
{
    public function view($page = 'home')
    {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            show_404();
        }

        if (strtolower($page) == 'contact') {
            $this->load->view('pages/' . $page);
        } else {
            $data['title'] = ucfirst($page);
            $this->load->view('templates/header', $data);
            $this->load->view('pages/' . $page);
            $this->load->view('templates/footer', $data);
        }
    }
}
