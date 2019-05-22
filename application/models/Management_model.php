<?php
    class Management_model extends CI_Model{
       
        public function update(){
         
            $data=array(
                'title' => $this->input->post('titulo_filme'),
                'body' => $this->input->post('descricao_filme'),
                'rating' => $this->input->post('aval_filme')
            );
            $this->db->where('id', $this->input->post('id_filme'));
			return $this->db->update('movies', $data);
        }

        public function update_series(){
         
            $data=array(
                'title' => $this->input->post('titulo_serie'),
                'body' => $this->input->post('descricao_serie'),
                'rating' => $this->input->post('aval_serie')
            );
            $this->db->where('id', $this->input->post('id_serie'));
			return $this->db->update('series', $data);
        }

        public function delete($id){
			$image_file_name = $this->db->select('img')->get_where('movies', array('id' => $id))->row()->img;
			$cwd = getcwd(); // save the current working directory
            $image_file_path = $cwd."\\assets\\images\\";
          
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd); // Restore the previous working directory
			$this->db->where('id', $id);
			$this->db->delete('movies');
			return true;
        }
        public function delete_serie($id){
			$image_file_name = $this->db->select('img')->get_where('series', array('id' => $id))->row()->img;
			$cwd = getcwd(); // save the current working directory
            $image_file_path = $cwd."\\assets\\images\\";
          
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd); // Restore the previous working directory
			$this->db->where('id', $id);
			$this->db->delete('series');
			return true;
		}
    }
?>