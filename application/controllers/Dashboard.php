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
       $data['donors']=$this->donor_model->getDonors();
       $this->load->view('dashboard',$data);
   } 
   
  function logout(){
       $this->session->sess_destroy();
       redirect('login');
   } 
   function parameters(){
       $this->form_validation->set_rules('secret','Secret','required');
       $this->form_validation->set_rules('conkey','Key','required');
       if($this->form_validation->run()){
           $arr=array(
                   'secret'=> $this->input->post('secret'),
                   'conkey'=> $this->input->post('conkey')
                   );
           $this->donor_model->parameters($arr);
           $this->add_param();
       }
       
   }
   function add_param(){
       $this->load->view('header');
       $this->load->view('add_parameters');
   }
}

