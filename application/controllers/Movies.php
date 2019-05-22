<?php 

    class Movies extends CI_Controller{
        public function view($page='home'){
            if(!file_exists(APPPATH.'views/movies/'.$page.'.php'))
                show_404();
            
        
            $data['title']=ucfirst($page);
            $data['movies']=$this->movie_model->get_movie();
            $data['series']=$this->movie_model->get_serie();
            $this->load->view('templates/header',$data);
            $this->load->view('movies/'.$page,$data);
            $this->load->view('templates/footer');
        }   
      
    }

    ?>