<?php
    class User_model extends CI_Model{
        public function __construct()
        {
            $this->load->database();
        }
        public function check_username_exists($username){
            $query = $this->db->get_where('users',array('username'=>$username));
            if(empty($query->row_array())){
                return true;
            }else{
                return false;
            }

        }
        public function register($enc_password){
            $data=array(
                'name'=>$this->input->post('name'),
                'username'=>$this->input->post('username'),
                'password'=>$enc_password,
                'email'=>$this->input->post('email')
            );
            return $this->db->insert('users',$data);
        } 

        public function login($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $result = $this->db->get('users');
        if($result->num_rows() == 1){
            return $result->row(0)->id;
        }else{
            return false;
        }
    }
    public function get_name($username){
        $this->db->where('username',$username);
        $result = $this->db->get('users');
            return $result->row(0)->name;
     
    }
    public function check_oldpassword($password){
        $enc_password=md5($password);
        $this->db->where('username',$this->session->userdata('username'));
        $this->db->where('password',$enc_password);
        $query = $this->db->get('users');
        if($query->num_rows()==1){
            return true;
        }else{
            return false;
        }

    }
    public function change_password($enc_password){
        $data=array(
            'password'=>$enc_password
        );
        $this->db->where('username', $this->session->userdata('username'));
        return $this->db->update('users', $data); 

    }
    public function retrieve_password($enc_password){
        $data=array(
            'password'=>$enc_password
        );
        $this->db->where('username', $this->input->post('username'));
        return $this->db->update('users', $data); 

    }
    }
   
?>