<?php

defined('BASEPATH') OR exit('no direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('donor_model');
        $this->load->library('Authorization_Token');
        if(!$this->session->userdata('token')){
            redirect('login'); 
        }
//       $is_valid_token= $this->authorization_token->validateToken();
//       var_dump($is_valid_token);
    }

    function index() {
          
       
        $this->load->view('header');
        $data['parameter'] = $this->donor_model->getParameters();
        $data['donors'] = $this->donor_model->getAllDonors();
        $this->load->view('dashboard', $data);
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

    function update($id) {
        $post = array('conkey' => $this->input->post('conkey'),
            'secret' => $this->input->post('secret'));
        $data = $this->donor_model->update($id, $post);
        if ($data) {
            $this->updateDonate();
        }
        redirect('dashboard');
    }

    function updateDonate($conkey, $secret) {
        $this->donor_model->updateParam($conkey, $secret);
    }

    function edit($id) {
        $data['param'] = $this->donor_model->getById($id);
        $this->load->view('header', $data);
        $this->load->view('edit_parameters', $data);
    }

}
