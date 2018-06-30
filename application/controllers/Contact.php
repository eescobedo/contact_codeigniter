<?php

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
//        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
//        $data['news'] = $this->news_model->get_news();

        $data['title'] = 'News archive';

//        $this->load->view('templates/header', $data);
        $this->load->view('contact/index', $data);
//        $this->load->view('templates/footer');
    }
}