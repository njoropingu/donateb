<?php defined('BASEPATH') OR exit('no direct script access allowed');

class Dashboard extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('donor_model');
        if(!$this->session->userdata('name')){
            redirect('login');
        }
    }
   function index(){
       
      $this->load->view('header');
      $data['parameter']= $this->donor_model->getParameters();
       $data['donors']=$this->donor_model->getDonors();
       $this->load->view('dashboard',$data);
   } 
   
  function logout(){
       $this->session->sess_destroy();
       redirect('login');
   } 
   function update($id){
   $this->donor_model->update($id);
   redirect('dashboard');
   }
   function edit($id){
       $data['param']= $this->donor_model->getById($id);
       $this->load->view('header',$data);
       $this->load->view('edit_parameters',$data);
   }
   
   
}

