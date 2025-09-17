<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->helper('url');
    }

    // tampilan login
    public function login() {
        $this->load->view('auth/login');
    }

    // proses login
    public function do_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->User_model->get_user($username, $password);

        if ($user) {
            $userdata = [
                'id'       => $user['id'],
                'username' => $user['username'],
                'role'     => $user['role'],
                'logged_in'=> TRUE
            ];
            $this->session->set_userdata($userdata);

            if ($user['role'] == 'admin') {
                redirect('admin/dashboard');
            } else {
                redirect('user/dashboard');
            }
        } else {
            $this->session->set_flashdata('error', 'Username / Password salah');
            redirect('auth/login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
