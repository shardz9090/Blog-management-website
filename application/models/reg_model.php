<?php
class reg_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    public function register_user()
    {
        $password = $this->input->post('password');
        $conpassword = $this->input->post('conpassword');
        // Configure the upload parameters
        $config['upload_path'] = './uploads/user_img/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2048; // In kilobytes (KB)
        $this->upload->initialize($config);

        if ($password != $conpassword) {
            $this->session->set_flashdata('wrong', 'Password and confirm password do not match');
            redirect('register');
        } else {
            if (empty($fname) && empty($uname) && !$this->upload->do_upload('uImage')) {
                echo "empty";
                print_r($_POST);
                print_r($_FILES);
            } else {
                // All required inputs are provided and file upload is successful, continue with further processing
                $file_data = $this->upload->data();
                // Get the file name from the uploaded file data
                $file_name = $file_data['file_name'];

                $data = array(
                    'fname' => $this->input->post('fname'),
                    'uImage' => $file_name,
                    'uname' => $this->input->post('uname'),
                    'password' => $password,
                );
                $this->db->insert('user', $data);
                $this->session->set_flashdata('success', 'The user has been register proceed to login');
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

            $this->session->set_userdata('log', 'logged'); //session name and parameter to send

            $this->session->set_flashdata('success', 'You are logged in');
            redirect('');
        } else {
            $this->session->set_flashdata('warning', 'The credentials dont match');
            redirect('signin');
        }
    }
}
