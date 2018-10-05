<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blogController extends CI_Controller
{
    
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    
    function __Construct()
    {
        parent::__Construct();
       // $this->load->database(); // load database
        $this->load->model('User'); // load model 
        $this->load->library('session');

    }
    
    public function index()
    {
        // echo "here"; exit ; 
        $this->load->view('first_view');
    }
    public function postData()
    {
        if (!empty($_POST)) {
            $first_name = $this->input->post('first_name');
            $last_name  = $this->input->post('last_name');
            if ($first_name && $last_name) {
               
                $data = array(
                    'first_name' => $first_name,
                    'last_name' => $last_name
                );
                $id   = $this->User->add($data);
            }
            //print_r($data);
            $this->load->view('first_view');
        }
    }
    public function posts()
    {
        $data['posts'] = $this->User->getPosts(); // calling Post model method getPosts()
        $this->load->view('table', $data); // load the view file , we are passing $data array to view file
    }
    public function delete($id)
    {
        if (empty($id)) {
            show_404();
        }
        if ($this->User->delete_user($id)) {
            $this->session->set_flashdata('message', 'Deleted Sucessfully');
            redirect(base_url('blogController/posts'));
        }
    }
    public function edit($id = '')
    {
        if ($this->input->post()) {
            $this->User->entry_update1($id, $this->input->post());
            //$this->load->view('table');
            echo "posted";
            exit;
        }
        $datas          = $this->User->entry_update($id);
        $data['result'] = $datas[0];
        $this->load->view('update', $data);
    }
}