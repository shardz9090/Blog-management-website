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
        $this->userid = $this->session->userdata("uid");
    }
    public function index()
    {
        $blogs = $this->blog_model->get_all_blogs();
        $products = $this->detail_model->products();
        $data['products'] = $products;
        $data['blogs'] = $blogs;
        $data['main'] = "index_view";
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
    public function blogs()
    {
        if ($this->session->userdata('log') != 'logged') {
            $this->session->set_flashdata('alert_message', 'Please signin to view this page');
            redirect('signin');
        }
        $logged_in_user = $this->session->userdata('uname');
        $this->load->model('Blog_model');
        $data['blogs'] = $this->blog_model->get_user_blogs($logged_in_user);
        $data['main'] = "blogs_view";
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
    public function viewblog()
    {
        $data['main'] = 'viewblog_view';
        $this->load->view('layouts/main_view', $data);
    }
    public function view_blog($blog_id)
    {
        // Load the model
        $this->load->model('blog_model');
        $data['main'] = 'viewblog_view';
        $data['blog'] = $this->blog_model->get_blog_by_id($blog_id);
        $this->load->view('layouts/main_view', $data);
    }
    public function adminlogin()
    {
        $data['main'] = 'adminlogin_view';
        $this->load->view('layouts/main_view', $data);
    }
    public function adminview()
    {
        $this->load->model('detail_model');
        $data['blog_count'] = $this->detail_model->getBlogCount();
        $blogs = $this->blog_model->get_all_blogs();
        $data['blogs'] = $blogs;
        $data['user_details'] = $this->detail_model->getUsers();
        $data['main'] = 'dashboard_view';
        $this->load->view('adminlayout/main_view', $data);
    }

    public function delete_user($uid)
    {
        $this->load->model('blog_model');
        $this->blog_model->delete_user($uid);
        redirect('admin');
    }
    public function delete_blog($bid)
    {
        $this->load->model('blog_model');
        $this->blog_model->delete_blog($bid);
        redirect('admin');
    }



    //FOR FORMS
    public function login_form()
    {
        $this->load->model('reg_model');
        $this->reg_model->login_user();
    }
    public function adminlogin_form()
    {
        $this->load->model('reg_model');
        $this->reg_model->admin_login();
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
