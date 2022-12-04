<?php

class Home extends CI_Controller
{
    public function index()
    {
            $this->load->view('tampilan/header');
            $this->load->view('tampilan/footer');
    }

}