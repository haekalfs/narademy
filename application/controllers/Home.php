<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('feedback_model');
    }
    public function index()
    {
        $data['meta'] = [
			'title' => 'Narademy',
		];
        $this->load->view('home', $data);
    }

    public function about()
    {
        $data['meta'] = [
			'title' => 'About Narademy',
		];
        $data['floc'] = [
			'title' => 'About Us',
		];
        $this->load->view('about', $data);
    }
    
    public function contact()
    {
    $data['meta'] = [
        'title' => 'Contact Us',
    ];
    $data['floc'] = [
        'title' => 'About Us',
    ];

    if ($this->input->method() === 'post') {
        $this->load->model('Feedback_model');

        // @TODO: lakukan validasi di sini sebelum insert ke model

        $feedback = [
        'id' => uniqid('', true), // genearate id unik
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'message' => $this->input->post('message')
        ];

        $feedback_saved = $this->feedback_model->insert($feedback);

        if ($feedback_saved) {
        return $this->load->view('contact_thanks');
        }
    }

    $this->load->view('contact', $data);
    }

}