<?php defined('BASEPATH') OR exit('no direct script access allowed');

class Donor_model extends CI_Model{
    
    function donors($data){
        $this->db->insert('donors',$data);
    }
    function getDonors(){
      return  $this->db->get('donors')->result();
    }
    function parameters($arr){
      return  $this->db->insert('param',$arr);
    }
    function getParameters(){
        return $this->db->get('param')->row();
    }
    function details($arr){
        $this->db->insert('donors',$arr);
    }
}

