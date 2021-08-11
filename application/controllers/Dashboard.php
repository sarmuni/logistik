<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('pelanggan_model');
        $this->load->model('barang_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('auth_user', ['email' => $this->session->userdata('email')])->row_array();


        $data['title'] = 'Dashboard';
        $data['count_pengirim'] = $this->pelanggan_model->count_pengirim();
        $data['count_barang'] = $this->barang_model->count_barang();
        // $data['count_barang_masuk'] =;
        // $data['count_barang_keluar'] =;
        // $data['count_penerima'] =;

        $this->template->load('template_neura/index', 'dashboard/index', $data);
    }
}
