<?php

defined('BASEPATH') OR exit('no direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        if($this->session->userdata('token')){
            redirect('dashboard'); 
        }
    }

    function index() {
        $this->load->view('login');
    }

    function checkAdmin() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run()) {
            $arr = array(
                'name' => $this->input->post('name'),
                'password' => md5($this->input->post('password'))
            );
            $check = $this->login_model->validate($arr);
            //token authorization library
            $this->load->library('Authorization_Token');
            //generate authorization key
            if($check) {
                $token_data['id'] = $check->id;
                $token_data['name'] = $check->name;
                $token_data['email'] = $check->email;
                $token_data['created_at'] = $check->created_at;
                $token_data['updated_at'] = $check->updated_at;
                $token_data['time'] = time();

                $user_token = $this->authorization_token->generateToken($token_data);
//                var_dump($user_token);
                $return_data = [
                    'name' => $check->name,
                    'email' => $check->email,
                    'created_at' => $check->created_at,
                    'token' => $user_token
                ];
                
                $this->session->set_userdata($return_data);                   
//                          print_r($return_data);

                redirect('dashboard');
            } else {
                $this->index();
            }
////       $is_valid_token= $this->authorization_token->validateToken($user_token);
////       if($is_valid_token){
////           print_r($is_valid_token);
////           redirect('dashboard'); 
//       }
        }
    }

}
