<?php
class dlemas extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Dlemas_model'); 
    }
    public function index()
    {
        $this->load->view('view-form-dlemas');
    }
    public function cetak()
    {   
        $data = $this->Dlemas_model->panggil();
        $this->load->view('view-data-dlemas', $data);
    }
}