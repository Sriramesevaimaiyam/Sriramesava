<?php
class userModel extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database(); // Load the database library
    }
    
    public function loginAuthentication(){
        $postData = $this->input->post(null, true);
        $mobileNumber=$postData['mobile'];
        $password=$postData['password'];
        $queryString = "SELECT * FROM user_table  WHERE `mobileNumber`=$mobileNumber AND `password`='$password'";
        $qryExe = $this->db->query($queryString);
        if (!$qryExe) {
            $error = $this->db->error();
            return false;
        }
		return $qryExe->result_array();
    }

}
?>