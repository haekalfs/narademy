<?php

class Course extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('course_model');
  }

  public function index()
  {
    // ambil artikel yang statusnya bukan draft
    $data['courses'] = $this->course_model->get_published();
    $data['floc'] = [
      'title' => "Browse All Courses",
    ];
    if (count($data['courses']) > 0) {
      // kirim data artikel ke view
      $this->load->view('courses/list_courses.php', $data);
    } else {
      // kalau gak ada artikel, tampilkan view ini
      $this->load->view('courses/empty_courses.php');
    }
  }

  public function show($slug = null)
  {
    // jika gak ada slug di URL tampilkan 404
    if (!$slug) {
      show_404();
    }

    // ambil artikel dengan slug yang diberikan
    $data['course'] = $this->course_model->find_by_slug($slug);

    // jika artikel tidak ditemuakn di database tampilkan 404
    if (!$data['course']) {
      show_404();
    }

    // tampilkan artikel
    $data['floc'] = [
      'title' => "Courses / $slug",
    ];
    $this->load->view('courses/show_courses.php', $data);
  }
}