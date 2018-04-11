<?php
class Encrypt_model extends CI_Model{
public function __construct(){
		parent::__construct();
 }
public function encodekey($data,$key){
    $access_key=$this->config->item('access_key');
    $api_key=$this->config->item('api_key');
    $access_token_www=$this->config->item('access_token_www');
    $service_key=$this->config->item('service_key');
    $data_key=$this->config->item('data_key');
    $cachedata_key=$this->config->item('cachedata_key');
    $this->load->library('encrypt');
     if($key==$access_key){
       $encrypt=$this->encrypt->encode($data,$key); 
     }elseif($key==$api_key){
       $encrypt=$this->encrypt->encode($data,$key); 
     }elseif($key==$access_token_www){
       $encrypt=$this->encrypt->encode($data,$key); 
     }elseif($key==$service_key){
       $encrypt=$this->encrypt->encode($data,$key); 
     }elseif($key==$data_key){
       $encrypt=$this->encrypt->encode($data,$key); 
     }elseif($key==$cachedata_key){
       $encrypt=$this->encrypt->encode($data,$key); 
     }else{
       $encrypt=0; 
     }
     return $encrypt;
 }
public function decodekey($data,$key){
    $access_key=$this->config->item('access_key');
    $api_key=$this->config->item('api_key');
    $access_token_www=$this->config->item('access_token_www');
    $service_key=$this->config->item('service_key');
    $data_key=$this->config->item('data_key');
    $cachedata_key=$this->config->item('cachedata_key');
    $this->load->library('encrypt');
     if($key==$access_key){
       $decode=$this->encrypt->decode($data,$key); 
     }elseif($key==$api_key){
       $decode=$this->encrypt->decode($data,$key); 
     }elseif($key==$access_token_www){
       $decode=$this->encrypt->decode($data,$key); 
     }elseif($key==$service_key){
       $decode=$this->encrypt->decode($data,$key); 
     }elseif($key==$data_key){
       $decode=$this->encrypt->decode($data,$key); 
     }elseif($key==$cachedata_key){
       $decode=$this->encrypt->decode($data,$key); 
     }else{
      $decode=0; 
     }
     return $decode;
 } 
public function encodeone($data){
 $encryptone=$this->encrypt->encode($data); 
 return $encryptone;
}
public function decodeone($data){
 $decodeone=$this->encrypt->decode($data); 
 return $decodeone;
}
public function demo(){
     $this->load->library('encrypt');
     $encrypted_password = 'rdrrr';
     $key = 'secret-key-in-config';
     //encode
     $encrypt=$this->encrypt->encode($encrypted_password,$key); 
     //decode
     $decode=$this->encrypt->decode($encrypt,$key);
     echo '<br> encode=>'.$encrypt; 
     echo '<br> decode=>'.$decode;
  
 }
}