<?php
defined('BASEPATH') or exit('No direct script access allowed');
// #[\AllowDynamicProperties]
class Home extends CI_Controller
{
    private $userid;
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        // $this->load->model('session_model');
        // $data['user'] = $this->session_model->getdata();
        $this->userid = $this->session->userdata("uid");
    }
    public function index()
    {
        echo $this->userid;
        echo "helo wordl";
        // $data['main'] = "index_view";
        // $this->load->view('layouts/main_view', $data);
    }
    public function about()
    {

        $data['main'] = "about_view";
        $this->load->view('layouts/main_view', $data);
    }
    public function post()
    {
        if ($this->session->userdata('log') != 'logged') {
            $this->session->set_flashdata('alert_message', 'Please signin to view this page');
            redirect('signin');
        }
        $data['main'] = "post_view";
        $this->load->view('layouts/main_view', $data);
    }
    public function contact()
    {
        $data['main'] = "contact_view";
        $this->load->view('layouts/main_view', $data);
    }
    public function register()
    {
        $data['main'] = "register_view";
        $this->load->view('layouts/main_view', $data);
    }
    public function signin()
    {
        $data['main'] = "sign_view";
        $this->load->view('layouts/main_view', $data);
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('signin');
    }
    public function profile()
    {
        $data['main'] = 'profile_view';
        $this->load->view('layouts/main_view', $data);
    }



    //FOR FORMS
    public function login_form()
    {
        $this->load->model('reg_model');
        $this->reg_model->login_user();
    }
    public function blog_form()
    {
        $this->load->model('blog_model');
        $this->blog_model->bloginput();
    }
    public function register_form()
    {
        $this->load->model('blog_model');
        $this->reg_model->register_user();
    }
}
