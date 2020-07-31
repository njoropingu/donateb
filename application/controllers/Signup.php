<?php defined('BASEPATH') OR exit('no direct script access allowed');

class Signup extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
header("Access-Control-Allow-Origin: * ");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run()){
            $arr['name']= $this->input->post('name');
            $arr['email']= md5($this->input->post('email'));
            $arr['password']= $this->input->post('password');
        }
        $this->login_model->register($arr);

    }
    
}

