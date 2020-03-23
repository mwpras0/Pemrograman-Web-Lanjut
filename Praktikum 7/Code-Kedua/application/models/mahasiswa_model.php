<?php    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class mahasiswa_model extends CI_Model {
    
        public function getAllmahasiswa()
        {
            //menampung isi tabel mahasiswa
            $query=$this->db->get('mahasiswa');

            return $query->result_array();
            
        }
        
        public function tambahdatamhs()
        {
            # code...
            $data=[
                "nama" => $this->input->post('nama',true),
                "nim" => $this->input->post('nim',true),
                "email" => $this->input->post('email',true),
                "jurusan" => $this->input->post('jurusan',true)
            ];
            $this->db->insert('mahasiswa',$data);
        } 
        
        public function hapusdatamhs($Id)
        {
            # code...
            $this->db->where('Id',$Id);
            $this->db->delete('mahasiswa');
        }

        public function getmahasiswaByID($Id)
        {
            # code...
            return $this->db->get_where('mahasiswa',['Id'=> $Id])->row_array();
        }

        public function ubahdatamhs()
        {
            # code...
            $data=[
                "nama" => $this->input->post('nama',true),
                "nim" => $this->input->post('nim',true),
                "email" => $this->input->post('email',true),
                "jurusan" => $this->input->post('jurusan',true)
            ];
            $this->db->where('Id',$this->input->post('id'));
            $this->db->update('mahasiswa',$data);
        }

        public function cariDataMahasiswa()
        {
            # code...
            $keyword=$this->input->post('keyword');
            $this->db->like('nama',$keyword);
            $this->db->or_like('jurusan',$keyword);
            return $this->db->get('mahasiswa')->result_array();
        }

        public function datatabels()
        {
            $query = $this->db->order_by('id','DESC')->get('mahasiswa');
            return $query->result();
	    }
    }
    
    /* End of file Controllername.php */
    
?>