<?php
class billingModel extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database(); // Load the database library
    }

    public function getBillingData(){
        $queryString = "SELECT * FROM billing_master";
        $qryExe = $this->db->query($queryString);
        if (!$qryExe) {
            $error = $this->db->error();
            return false;
        }
		return $qryExe->result_array();
    }
    
    public function AddNewService(){
        $postData = $this->input->post(null,true);
        $insertData = array('customerName' => $postData["name"], 'mobile' => $postData["mobile"], 'billingUser'=> $postData['user'], 'service' => $postData["service"], 'type' => $postData['type'], 'paymentMode' => $postData['paymentMode'], 'status' => $postData['status'], 'payment' => $postData['payment'], 'userId' => $postData['userId'], 'customerId' => $postData['id']);
        $insertExe = $this->db->insert("billing_master", $insertData);

        if (!$insertExe) {
            $error = $this->db->error();
            return false;
        }
    }

}
