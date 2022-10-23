<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $pageData = [];

    $this->load->view('site/include/header', $pageData);
    $this->load->view('site/index', $pageData);
    $this->load->view('site/include/footer', $pageData);
  }
  public function shop()
  {
    $pageData = [];

    $this->load->view('site/include/header', $pageData);
    $this->load->view('site/shop', $pageData);
    $this->load->view('site/include/footer', $pageData);
  }
  public function about()
  {
    $pageData = [];

    $this->load->view('site/include/header', $pageData);
    $this->load->view('site/about', $pageData);
    $this->load->view('site/include/footer', $pageData);
  }
  public function contact()
  {
    $pageData = [];

    $this->load->view('site/include/header', $pageData);
    $this->load->view('site/contact', $pageData);
    $this->load->view('site/include/footer', $pageData);
  }
  public function details()
  {
    $pageData = [];

    $this->load->view('site/include/header', $pageData);
    $this->load->view('site/details', $pageData);
    $this->load->view('site/include/footer', $pageData);
  }

}
