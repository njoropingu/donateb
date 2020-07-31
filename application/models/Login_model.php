<?php defined('BASEPATH') OR exit('no direct script access allowed');

class Login_model extends CI_Model{
    function validate($arr){
      return  $this->db->get_where('admin',$arr)->row();
    }
}
