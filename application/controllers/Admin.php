<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        if (!$this->session->userdata('logged_in') || $this->session->userdata('role') != 'admin') {
            redirect('auth/login');
        }
    }

    public function dashboard() {
        $data['total_ruang'] = 0;
        $data['total_user'] = 0;
        $data['total_booking'] = 0;
        $this->load->view('admin/dashboard', $data);
    }
}
