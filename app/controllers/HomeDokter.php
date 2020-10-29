<?php

class HomeDokter extends Controller {
    public function index()
    {
        $data['judul'] = 'Beranda Dokter';
        //$data['nama'] = $this->model('User_model')->getUser();
        $this->view('templatesdokter/header', $data);
        $this->view('homedokter/index', $data);
        $this->view('templatesdokter/footer');
    }

    public function chat()
    {
        $data['judul'] = 'Pemesanan Client';
        //$data['nama'] = $this->model('User_model')->getUser();
        $this->view('templatesdokter/header', $data);
        $this->view('homedokter/chat', $data);
        $this->view('templatesdokter/footer');
    }
}