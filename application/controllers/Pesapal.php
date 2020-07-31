<?php defined('BASEPATH') OR exit('no direct script access allowed');

class Pesapal extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('donor_model');
    }
 
    function index(){
        $arr['first_name']=$this->input->post('first_name');
        $arr['last_name']=$this->input->post('last_name');
        $arr['merchant_id']=$this->input->post('merchant_id');
        $arr['transaction_code']=$this->input->post('transaction_code');
        $arr['phone']=$this->input->post('phone');
        $arr['amount']=$this->input->post('amount');
        $arr['description']=$this->input->post('description');
        $arr['date']=$this->input->post('date');
        $arr['status']=$this->input->post('status');
        
        log_message('debug', json_encode($arr));
        $this->donor_model->details($arr);
        
    }
    
}

