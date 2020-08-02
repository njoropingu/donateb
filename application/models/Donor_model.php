<?php defined('BASEPATH') OR exit('no direct script access allowed');

class Donor_model extends CI_Model{
    
    function donors($data){
        $this->db->insert('donors',$data);
    }
    function getDonors(){
      return  $this->db->get_where('donors')->row();
    }
    function update($id){
        $arr['secret'] = $this->input->post('secret');
        $arr['conkey'] = $this->input->post('conkey');                 
      $this->db->where(array('id'=>$id));
      $this->db->update('param',$arr);
    }
 function getParameters(){
     return $this->db->get('param')->result();
 }
    function getById($id){
        return $this->db->get_where('param',array('id'=>$id))->row();
    }
    function details($arr){
        $this->db->insert('donors',$arr);
    }
}

