<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function welcome()
    {
        $this->load->view('auth/welcome');
    }

    public function login()
{
    $clinic = $this->input->get('clinic');

    $this->session->set_userdata('clinic', $clinic);

    $data['clinic'] = $clinic;

    $this->load->view('auth/login', $data);
}


    public function dashboard()
    {
        $this->load->view('dashboard');  // because file is in /views/dashboard.php
    }
}
