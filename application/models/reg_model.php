<?php
class reg_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->library('form_validation');
    }
    public function register_user()
    {
        $fname = $this->input->post('fname');
        $uname = $this->input->post('uname');
        $gender = $this->input->post('gender');
        $password = $this->input->post('password');
        $birth_year = $this->input->post('birth_year');
        $mnum = $this->input->post('mnum');
        $conpassword = $this->input->post('conpassword');
        // Configure the upload parameters
        $config['upload_path'] = './uploads/user_img/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
        $config['max_size'] = 2048; // In kilobytes (KB)
        $this->upload->initialize($config);

        if ($password != $conpassword) {
            $this->session->set_flashdata('wrong', 'Password and confirm password do not match');
            redirect('Home/register');
        } else {
            if (empty($fname) || empty($uname) || !$this->upload->do_upload('uImage')) {
                if (empty($fname)) {
                    $this->session->set_flashdata('wrong', 'Please enter your full name');
                } elseif (empty($uname)) {
                    $this->session->set_flashdata('wrong', 'Please enter your User name');
                } elseif (!$this->upload->do_upload('uImage')) {
                    $this->session->set_flashdata('wrong', 'The photo you have provided is either not supported or empty.');
                }
                redirect('register');
            } else {
                $file_data = $this->upload->data();
                // Get the file name from the uploaded file data
                $file_name = $file_data['file_name'];

                $data = array(
                    'fname' => $fname,
                    'uImage' => $file_name,
                    'uname' => $uname,
                    'password' => $password,
                    'gender' => $gender,
                    'birth_year' => $birth_year,
                    'mnum' => $mnum,
                );
                $this->db->insert('user', $data);
                $this->session->set_flashdata('success', 'The user has been register. Please proceed to login');
                redirect('register');
            }
        }
    }

    public function login_user()
    {

        $uname = $this->input->post('uname');
        $password = $this->input->post('password');
        $this->db->where('uname', $uname);
        $this->db->where('password', $password);
        $query = $this->db->get('user');
        $find_user = $query->num_rows();

        if ($find_user > 0) {
            $this->session->set_userdata('uname', $query->row()->uname); //session name and parameter to send
            $this->session->set_userdata('fname', $query->row()->fname); //session name and parameter to send
            $this->session->set_userdata('uImage', $query->row()->uImage); //session name and parameter to send
            $this->session->set_userdata('birth_year', $query->row()->birth_year);
            $this->session->set_userdata('gender', $query->row()->gender);
            $this->session->set_userdata('mnum', $query->row()->mnum);
            $this->session->set_userdata('log', 'logged'); //session name and parameter to send

            $this->session->set_flashdata('success', 'You are logged in');
            redirect('Home/');
        } else {
            $this->session->set_flashdata('warning', 'The credentials dont match');
            redirect('Home/signin');
        }
    }
}
