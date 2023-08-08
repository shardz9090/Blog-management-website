<?php
class blog_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    public function bloginput()
    {
        // Configure the upload parameters
        $config['upload_path'] = './uploads/blog_img/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2048; // In kilobytes (KB)
        $this->upload->initialize($config);

        // Get the other form data from $_POST
        $uname = $this->session->userdata('uname');
        $b_title = $this->input->post('b_title');
        $b_description = $this->input->post('editor');

        // Check if any of the required inputs is null
        if (empty($b_title) || empty($b_description) || !$this->upload->do_upload('b_image')) {
            if (empty($b_title)) {
                $this->session->set_flashdata('wrong', 'Please include the title.');
            } elseif (empty($b_description)) {
                $this->session->set_flashdata('wrong', 'Please write something in your blog.');
            } else {
                $this->session->set_flashdata('wrong', 'Please add a picture in your blog.');
            }
            redirect('post');
        } else {
            // All required inputs are provided and file upload is successful, continue with further processing
            $file_data = $this->upload->data();

            // Get the file name from the uploaded file data
            $file_name = $file_data['file_name'];

            // Prepare the data for database insertion
            $blog_data = array(
                'uname' => $uname,
                'b_title' => $b_title,
                'b_description' => $b_description,
                'b_image' => $file_name, // Save the file name to the database
            );

            // Insert the blog data into the 'blogs' table
            $this->db->insert('blogs', $blog_data);
            $this->session->set_flashdata('success', 'Your blog has been published.');

            redirect('post');

            // Redirect to the appropriate page or show a success message to the user
        }
    }
    public function get_all_blogs()
    {
        $query = $this->db->get('blogs');
        return $query->result_array();
    }
    public function get_blog_by_id($blog_id)
    {
        $this->db->where('bid', $blog_id);
        $query = $this->db->get('blogs');
        return $query->row_array();
    }
    public function get_user_blogs($uname)
    {
        $this->db->where('uname', $uname);
        $query = $this->db->get('blogs');
        return $query->result_array();
    }
}
