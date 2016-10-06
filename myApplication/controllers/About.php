<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }
    public function index()
    {
        $this->load->model('templates/pages_model');
        $this->load->view('templates/header', $this->header_model->header_data());
        $this->load->view('templates/about', $this->pages_model->page_data(1));
        $this->load->view('templates/footer');
    }

    public function en()
    {
        $this->load->model('templates/pages_model');
        $this->load->view('templates/header', $this->header_model->header_data());
        $this->load->view('templates/aboutEn', $this->pages_model->page_data(8));
        $this->load->view('templates/footer');
    }

    public function ar()
    {
        $this->load->model('templates/pages_model');
        $this->load->view('templates/header', $this->header_model->header_data());
        $this->load->view('templates/aboutAr', $this->pages_model->page_data(7));
        $this->load->view('templates/footer');
    }
}
