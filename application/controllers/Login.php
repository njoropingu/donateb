<?php defined('BASEPATH') OR exit('no direct script access allowed');


class Login extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        if($this->session->userdata('name')){
            redirect('dashboard');
        }
        
        }
    
    function index(){
     
        $this->load->view('login');
    }
    function checkAdmin(){
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run()){
            $arr=array(
                'name'=>$this->input->post('name'),
                'password'=>md5($this->input->post('password'))
            );
           $check = $this->login_model->validate($arr);
           if($check){
               $data = ['name'=>$check->name
                       ];
                       $this->session->set_userdata($data);
               redirect('dashboard');
           }
           else{
               $this->index();
           }
             
        }
    }     
    
 

   }

