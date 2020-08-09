<?php defined('BASEPATH') OR exit('no direct script access allowed');

class Donor_model extends CI_Model{
    
    function donors($data){
        $this->db->insert('donors',$data);
    }
    function getDonors(){
      return  $this->db->get_where('donors')->row();
    }
 function getAllDonors(){
      return  $this->db->get_where('donors')->result();
    }
    function update($id,$post){
                      
      $this->db->where(array('id'=>$id));
      $this->db->update('param',$post);
    }
    function updateParam($conkey,$secret){
       
            $url = 'http://localhost/donate/parameters';
            $client=curl_int($url);
            $arr = array(
                
                'conkey' => $conkey,
                'secret' => $secret
                    );
            
            curl_setopt($client,CURLOPT_POST,true);
            curl_setopt($client, CURLOPT_POSTFIELDS, $arr);
//            curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
            $response= curl_exec($client);
            echo json_encode($response);
            log_message('debug', 'Post response :: ' . json_encode($response));
            $curl_close($client);
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

