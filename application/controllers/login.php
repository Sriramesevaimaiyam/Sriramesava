<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     * 
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('billingModel');
        $this->load->model('customerModel');
        $this->load->model('userModel');

        // if ($this->Utilities->checkUserLogged()) {
        //     $userLoggedIn = $this->session->get_userdata('vendorLoggedIn');
        //     $this->data['vendorLoggedIn'] = $userLoggedIn['vendorLoggedIn'];
        // }
    }

    public function index()
    {
        $this->load->view('login.php');
    }

    public function authentication()
    {
        $postData = $this->input->post(null, true);
        $authentication = $this->userModel->loginAuthentication();
        if (isset($authentication[0]['id'])) {
            session_start();
            // $_session['userId'] = $authentication[0]['id'];
            // $_session['userName'] = $authentication[0]['userName'];
            // $_session['mobile']= $authentication[0]['mobileNumber'];
            $userLoggedIn = array(
                'userId' => $authentication[0]['id'],
                'userName' => $authentication[0]['userName'],
                'mobile' => $authentication[0]['mobileNumber']
            );
            $_SESSION['userLoggedIn']=$userLoggedIn;
            $this->load->view('dashboard.php');
        }
        else{
            $this->load->view('login.php');
        }
    }
}
