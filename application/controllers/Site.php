<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller
{
    public function __construct() {
        parent:: __construct();

        $this->load->helper('url');

    }

    public function index()
    {

        $config["base_url"] = base_url() . "site";
        $data['transparent']='header-transparent';

        $this->load->view('site/comm/header',$data);
        $this->load->view('site/test');
        $this->load->view('site/comm/footer');
    }

    public function blog()
    {
        $config["base_url"] = base_url() . "site";
        $data['transparent']='';


        $this->load->view('site/comm/header',$data);
        $this->load->view('site/blog');
        $this->load->view('site/comm/footer');

    }

}