<?php

defined('BASEPATH') OR exit('no direct script access allowed');

class TestSend extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('donor_model');
    }

   
    function my_test(){
        $data=$this->donor_model->getParameters();
        $paramInfo=$data[0];       
        $this->donor_model->updateParam($paramInfo->conkey,$paramInfo->secret);
        redirect('dashboard');
    }

}
