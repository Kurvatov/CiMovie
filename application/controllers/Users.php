<?php 
    class Users extends CI_Controller{

       


        public function register(){

            if($this->session->userdata('logged_in')){
              
                redirect('home');  
               
			}


            $data['title']="Sign Up";
    
            $this->form_validation->set_rules('name','Name','required|max_length[40]');
            $this->form_validation->set_rules('username','Username','required|max_length[40]|callback_check_username_exists');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required|max_length[40]');
            $this->form_validation->set_rules('password2','Confirm Password','matches[password]');
            
            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header',$data);
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');
            }else{
                $enc_password=md5($this->input->post('password'));
                $this->user_model->register($enc_password);
                redirect('home');
            }
        }
         public function check_username_exists($username){
            $this->form_validation->set_message('check_username_exists','That username is already taken. PLease choose a different one.');
            if($this->user_model->check_username_exists($username)){
                return true;
            }else{
                return false;
            }

        }
        public function login(){

            if($this->session->userdata('logged_in')){
              
                redirect('home');  
               
			}
            $data['title']="Log In";
            
      
            $this->form_validation->set_rules('username','Username','required|max_length[40]');
         
            $this->form_validation->set_rules('password','Password','required|max_length[40]');
 
            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header',$data);
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');
            }else{
                $username = $this->input->post('username');
                $password = md5($this->input->post('password'));
                $userid = $this->user_model->login($username,$password);
                $name = $this->user_model->get_name($username);
            if($userid){
                $userdata = array(
                    'user_id' => $userid,
                    'username' => $username,
                    'name'=> $name,
                    'logged_in' => true
                );
                $this->session->set_userdata($userdata);
					
				redirect('home');
            }else{
                $this->session->set_flashdata('login_failed', 'You have entered an invalid username or password');
                redirect('users/login');
            }
        }
        }
        public function logout(){
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('password');
            redirect('users/login');
        }

        public function edit_password(){
           
                // Check login
                if(empty($this->session->userdata('logged_in'))){
                    redirect('users/login');
                } 
                $data['title']="Edit Password";
                $this->form_validation->set_rules('old-password','Old Password','required||max_length[40]callback_check_oldpassword');
                $this->form_validation->set_rules('new-password','New Password','required|max_length[40]');
                $this->form_validation->set_rules('new-password2','Confirm New Password','matches[new-password]');
                if($this->form_validation->run() === FALSE){
                    $this->load->view('templates/header',$data);
                    $this->load->view('users/edit_password', $data);
                    $this->load->view('templates/footer');
                }else{
                    $enc_password=md5($this->input->post('new-password'));
                    $this->user_model->change_password($enc_password);
                    $this->session->set_flashdata('password_updated', 'Your password has been updated');
                    redirect('users/edit_password');
                }
        }
        public function check_oldpassword($password){
            $this->form_validation->set_message('check_oldpassword','Wrong password');
            if($this->user_model->check_oldpassword($password)){
                return true;
            }else{
                return false;
            }
        }
        public function retrieve_password(){
            if($this->session->userdata('logged_in')){
                redirect('home');  
			}
          
            $data['title']="Retrieve Password";

            $this->form_validation->set_rules('username','Username','required|max_length[40]');
            $this->form_validation->set_rules('password','New Password','required|max_length[40]');
            $this->form_validation->set_rules('password2','Confirm New Password','matches[password]');
            
            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header',$data);
                $this->load->view('users/retrieve_password', $data);
                $this->load->view('templates/footer');
            }else{
                $enc_password=md5($this->input->post('password'));
                $this->user_model->retrieve_password($enc_password);
                $this->session->set_flashdata('password_updated', 'Your password has been updated');
                redirect('users/login');
            }
    }

    }