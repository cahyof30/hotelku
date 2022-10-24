<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hotelku extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['judul'] = "Halaman Depan";
        $this->load->view('v_header', $data);
        $this->load->view('v_index', $data);
        $this->load->view('v_footer', $data);
    }
    public function reservasi()
    {
        $data['judul'] = "Halaman Reservasi";
        $this->load->view('v_header', $data);
        $this->load->view('v_form_reservasi', $data);
        $this->load->view('v_footer', $data);
    }
}
