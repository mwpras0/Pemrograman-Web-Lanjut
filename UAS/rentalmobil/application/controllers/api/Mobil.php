<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Mobil extends REST_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mobil_model','mobil');
    }

    public function index_get()
    {
        $id = $this->get('id_mobil');
        if($id === null){
            $mobil = $this->mobil->getMobil();
        }else{
            $mobil = $this->mobil->getMobil($id);
        }

        if($mobil){
            $this->response([
                'status' => true,
                'data' => $mobil
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete(){
        $id = $this->delete('id_mobil');

        if($id===null){
            $this->response([
                'status' => false,
                'message' => 'Provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if($this->mobil->deleteMobil($id) > 0) {
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'deleted'
                ], REST_Controller::HTTP_OK);
            }else{
                $this->response([
                    'status' => false,
                    'message' => 'id not found!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post(){
        $data = [
            'id_type' => $this->post('id_type'),
            'merk' => $this->post('merk'),
            'no_plat' => $this->post('no_plat'),
            'warna' => $this->post('warna'),
            'tahun' => $this->post('tahun'),
            'harga' => $this->post('harga'),
            'status' => $this->post('status'),
            'gambar' => $this->post('gambar'),
        ];

        if($this->mobil->createMobil($data) > 0){
            $this->response([
                'status' => true,
                'message' => 'new mobil has been created'
            ], REST_Controller::HTTP_CREATED);
        }else{
            $this->response([
                'status' => false,
                'message' => 'failed to create new data'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put(){
        $id = $this->put('id_mobil');
        $data = [
            'id_type' => $this->put('id_type'),
            'merk' => $this->put('merk'),
            'no_plat' => $this->put('no_plat'),
            'warna' => $this->put('warna'),
            'tahun' => $this->put('tahun'),
            'harga' => $this->put('harga'),
            'status' => $this->put('status'),
            // 'gambar' => $this->put('gambar'),
        ];

        if($this->mobil->updateMobil($data, $id) > 0){
            $this->response([
                'status' => true,
                'message' => 'data mobil has been updated'
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'failed to update data'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

}




?>