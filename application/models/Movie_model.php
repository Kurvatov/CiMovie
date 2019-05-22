<?php 
    class Movie_model extends CI_Model{
        public function get_movie(){
            $query = $this->db->get('movies');
            return  $query->result_array();
        }
        public function get_serie(){
            $query = $this->db->get('series');
            return  $query->result_array();
        }  
        
        public function addmovie($movie_img){
       
        $data = array(
            'title' => $this->input->post('title'),
            'rating' => $this->input->post('rating'),
            'body' => $this->input->post('description'),
            'img' => $movie_img
        );
        return $this->db->insert('movies', $data);
    }
    public function addserie($serie_img){
       
        $data = array(
            'title' => $this->input->post('title'),
            'rating' => $this->input->post('rating'),
            'body' => $this->input->post('description'),
            'img' => $serie_img
        );
        return $this->db->insert('series', $data);
    }
    }






?>