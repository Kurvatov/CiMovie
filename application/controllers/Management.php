<?php   
    class Management extends CI_Controller
    {
        public function addmovie(){
            if(!($this->session->userdata('logged_in'))){
              
                redirect('users/login');  
               
			}
            //set title of Add Movie Page
            $data['title']='Add Movie';
            //validating the form inputs
            $this->form_validation->set_rules('title','Title','required|max_length[40]');
            $this->form_validation->set_rules('rating','Rating','required');
            $this->form_validation->set_rules('description','Description','required');
            //if the validation run with errors, it loads the views again
            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header',$data);
                $this->load->view('management/addmovie',$data);
                $this->load->view('templates/footer');
            }
            else{
                $config['upload_path'] = './assets/images/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
				$config['max_width'] = '2000';
                $config['max_height'] = '2000';
                
                $this->load->library('upload',$config);

                if(!$this->upload->do_upload()){
                    $errors = array('error' => $this->upload->display_errors());
                    $movie_img = 'no-image.png';
                }else{
                   
                    $movie_img = $this->upload->data('file_name');
                }
            
                $this->movie_model->addmovie($movie_img);

                redirect('movies');

            }

        }
        public function addserie(){
            if(!($this->session->userdata('logged_in'))){
              
                redirect('users/login');  
               
			}
            //set title of Add Movie Page
            $data['title']='Add Serie';
            //validating the form inputs
            $this->form_validation->set_rules('title','Title','required|max_length[40]');
            $this->form_validation->set_rules('rating','Rating','required');
            $this->form_validation->set_rules('description','Description','required');
            //if the validation run with errors, it loads the views again
            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header',$data);
                $this->load->view('management/addserie',$data);
                $this->load->view('templates/footer');
            }
            else{
                $config['upload_path'] = './assets/images/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
				$config['max_width'] = '2000';
                $config['max_height'] = '2000';
                
                $this->load->library('upload',$config);

                if(!$this->upload->do_upload()){
                    $errors = array('error' => $this->upload->display_errors());
                    $serie_img = 'no-image.png';
                }else{
                   
                    $serie_img = $this->upload->data('file_name');
                }
            
                $this->movie_model->addserie($serie_img);

                redirect('series');

            }

        }  
       public function update(){
          
            $this->load->model('management_model');
            $this->management_model->update();
            redirect('movies');
       }
       public function update_series(){
          
        $this->load->model('management_model');
        $this->management_model->update_series();
        redirect('series');
   }

       public function delete($id){
      
        $this->load->model('management_model');
            $this->management_model->delete($id);
      

        redirect('movies');
    }
    public function delete_serie($id){
      
        $this->load->model('management_model');
            $this->management_model->delete_serie($id);
      

        redirect('series');
    }
    }
?>
    