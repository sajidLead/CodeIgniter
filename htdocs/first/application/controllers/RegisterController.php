<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {
	 function __Construct()
    {
        parent::__Construct();
        $this->load->database(); // load database
        $this->load->model('Register'); // load model 
        $this->load->library('session');
        $this->load->library('encryption');
        $this->load->library('form_validation');
    }
	public function form(){
		$this->load->view('register');
	}

	public function store(){
		// echo "here";
		// exit;

		if(!empty($_POST)){
			$name = $this ->input->post('name');
			$user_name = $this->input->post('user_name');
			$email = $this->input->post('email');
			$contact_no = $this ->input->post('contact_no');
			$password = md5($this->input->post('password'));
			$this->db->where(array('user_name'=>$user_name));
			$res = $this->db->get('registers')->result_array();
			if($user_name && $email && $password && empty($res)){
				$data = array(
					'name' => $name,
					'contact_no' =>$contact_no,
					'user_name' => $user_name,
					'email' =>$email,
					'password' =>$password

				);
				$id = $this->Register->storeData($data);
			$this->load->view('login');
			return;
			}
			$this->load->view('login');
		}
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function profile()
	{
		$data['posts'] = $this->Register->getPosts(); 
		//print_r($data);
        $this->load->view('profile', $data); 
	}

	public function checkLogin()
	{
		$validation_rules = array(
			array(
				'field' => 'user_name',
				'label' => 'user_name',
				'rules' => 'required',
				'errors' => array('required' => 'Please enter a user name'),
			),
			array(
				'field' => 'password',
				'label' => 'password',
				'rules' => 'required|min_length[6]|max_length[33]',
				'errors' => array('required' => 'Please enter a password'),
			)
		);
		$this->form_validation->set_rules($validation_rules);
		if( $this->form_validation->run() === FALSE){
			return $this->load->view('login');
		}
		$user_name =$this->input->post('user_name');
		$pass = $this->input->post('password');
		$res = $this->Register->checkUser(array('user_name'=>$user_name, 'password'=>md5($pass)));
		if($res != false)
		{
			//echo "True User";
			// print_r($res);
			
			redirect('RegisterController/profile');
			
		}
		else
		{
			//echo "some invalid user";
			$this->session->set_flashdata('error', 'Invalid Username or Password');
			redirect('RegisterController/login');
		}
	}
	public function getData()
	{
		$data['posts'] = $this->Register->getPosts(); 
		//print_r($data);
        $this->load->view('profile', $data); 
	}
	public function edit()
	{
		$this->load->view('editRegister');
	}
	public function editPost($id = '')
	{
		if ($this->input->post()) {
            $this->Register->entry_update1($id, $this->input->post());
            redirect('RegisterController/list');
            //echo "posted";
        }
        else
        {$datas = $this->Register->entry_update($id);
                //print_r($datas); return;
                $data['result'] = $datas[0];
                $this->load->view('editRegister', $data);}
	}
	public function list()
	{
		$data['list'] = $this->Register->getPosts(); // calling Post model method getPosts()
        $this->load->view('list', $data);
		//$this->load->view('list');
	}
	function logout()
	{

    $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
    $this->session->sess_destroy();
    redirect('RegisterController/login');
	}
	public function employee()
	{
		$this->load->view('employee_add');
	}
	public function update()
	{
		$data['update'] = $this->Register->getPosts(); // calling Post model method getPosts()
        $this->load->view('list', $data);
	}
	 public function delete($id)
    {
        if (empty($id)) {
            show_404();
        }
        if ($this->User->delete_user($id)) {
            $this->session->set_flashdata('message', 'Deleted Sucessfully');
            redirect(base_url('RegisterController/list'));
        }
    }










}