<?php
class Device_model extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->library('user_agent');
    }
    public function get_device(){
        #################################################
        if ($this->agent->is_robot()){
                $agent = $this->agent->robot();
                $device = "mobile";
        }elseif ($this->agent->is_mobile()){
                $agent = $this->agent->mobile();
                $device = "mobile";
        }elseif ($this->agent->is_browser()){
                //$agent = $this->agent->browser().' '.$this->agent->version();
                $agent = $this->agent->browser();
                $device = "desktop";
        }else{
                $agent = 'Unidentified User Agent';
                $device = "desktop";
        }
        
        #################################################
        if($this->input->get_post("device") !== FALSE){
            $device = $this->input->get_post("device");
        }
        #################################################
        ///// Fix Device ////
        //$device = "mobile";
        return $device;
    }
    
}