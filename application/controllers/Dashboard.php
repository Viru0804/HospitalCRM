<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $clinic = $this->session->userdata('clinic');

        $data['clinic'] = $clinic;
        $data['page_title'] = "Admin Dashboard";
        $data['active'] = "dashboard";  // highlight menu

        $this->load->view('dashboard', $data);
    }
}
