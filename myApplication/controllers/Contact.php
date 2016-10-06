<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }
    public function index()
    {
        $this->load->model('templates/pages_model');
        $data['page'] = $this->pages_model->page_data(3);
        
        $this->load->view('templates/header', $this->header_model->header_data());
        $this->load->view('templates/contact', $data);
        $this->load->view('templates/footer');
    }

    public function en()
    {
        $this->load->model('templates/pages_model');
        $data['page'] = $this->pages_model->page_data(9);

        $this->load->view('templates/header', $this->header_model->header_data());
        $this->load->view('templates/contactEn', $data);
        $this->load->view('templates/footer');
    }

    public function ar()
    {
        $this->load->model('templates/pages_model');
        $data['page'] = $this->pages_model->page_data(10);

        $this->load->view('templates/header', $this->header_model->header_data());
        $this->load->view('templates/contactAr', $data);
        $this->load->view('templates/footer');
    }
}
