<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'My Profile';
<<<<<<< HEAD
        echo $this->session->userdata('email');
        die();
        $data['user'] = $this->db->get_where('user', [
            'email' =>
                $this->session->userdata('email')
        ])->row_array();
=======
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
>>>>>>> 5e3bb6aa0c53026e5794e99b3086d2d6d30ca267

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }
}