<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Packing extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }
    public function index()
    {
        $this->load->model('templates/pages_model');
        $this->load->view('templates/header', $this->header_model->header_data());
        $this->load->view('templates/packing', $this->pages_model->page_data(4));
        $this->load->view('templates/footer');
    }

    public function en()
    {
        $this->load->model('templates/pages_model');
        $this->load->view('templates/header', $this->header_model->header_data());
        $this->load->view('templates/packingEn', $this->pages_model->page_data(5));
        $this->load->view('templates/footer');
    }

    public function ar()
    {
        $this->load->model('templates/pages_model');
        $this->load->view('templates/header', $this->header_model->header_data());
        $this->load->view('templates/packingAr', $this->pages_model->page_data(6));
        $this->load->view('templates/footer');
    }
}
