<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Home extends CI_Controller {
    
        public function index($name='')
        {
            $data['title']='Home';
            //echo "Selamat Datang di Halaman HOME";
            //data adalah array yang disi dengan nama
            $data['name']=$name;
            $this->load->view('template/header',$data);
            //tambah data pada home/index
            $this->load->view('home/index',$data);
            $this->load->view('template/footer');
        }
    
    }
    
    /* End of file Controllername.php */
    
?>