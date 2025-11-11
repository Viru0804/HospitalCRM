<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function welcome()
    {
        $this->load->view('auth/welcome');
    }

    public function login()
    {
        // We'll build this view in the next step
        $clinic = $this->input->get('clinic'); // manoday|sunshine
        $data['clinic'] = $clinic ?: '';
        $this->load->view('auth/login', $data); // (login.php coming next)
    }
}
