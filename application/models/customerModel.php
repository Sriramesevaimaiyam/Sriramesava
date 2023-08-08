<?php
class customerModel extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database(); // Load the database library
    }
    
    public function createCustomer(){
        $postData = $this->input->post(null, true);

        $insertData = array('name' => $postData["name"], 'mobile' => $postData["mobile"], 'address' => $postData["address"]);
        $insertExe = $this->db->insert("customer_master", $insertData);

        if (!$insertExe) {
            $error = $this->db->error();
            return false;
        }
    }

    public function customerData(){
        $queryString = "SELECT * FROM customer_master";
        $qryExe = $this->db->query($queryString);
        if (!$qryExe) {
            $error = $this->db->error();
            return false;
        }
		return $qryExe->result_array();
    }

    public function getCustomerList($data){
        $queryString = "SELECT * FROM customer_master WHERE `mobile`= $data OR `name`= $data";
        $qryExe = $this->db->query($queryString);
        if (!$qryExe) {
            $error = $this->db->error();
            return false;
        }
		return $qryExe->result_array();
    }

}
