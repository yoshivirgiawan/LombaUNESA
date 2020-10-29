<?php

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templatesuser/header', $data);
        $this->view('home/index', $data);
        $this->view('templatesuser/footer');
    }
}