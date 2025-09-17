<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        if (!$this->session->userdata('logged_in') || $this->session->userdata('role') != 'user') {
            redirect('auth/login');
        }
    }

    public function dashboard() {
        $this->load->view('user/dashboard');
    }
}
