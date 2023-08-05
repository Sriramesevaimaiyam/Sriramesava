<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller {

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
        $this->load->model('customerModel');
        // if ($this->Utilities->checkUserLogged()) {
        //     $userLoggedIn = $this->session->get_userdata('vendorLoggedIn');
        //     $this->data['vendorLoggedIn'] = $userLoggedIn['vendorLoggedIn'];
        // }
    }

	public function index()
	{
		$customerData = $this->customerModel->getCustomerList();
		$this->data['customerData'] = $customerData;
		$this->load->view('customer.php');
	}

	public function createCustomer(){
		$postData = $this->input->post(null, true);

        $customerList = $this->customerModel->getCustomerList($postData['search']);
	}

	public function editCustomer(){
		
	}

	public function notification(){
		$this->load->view('notification.php');
	}

	public function serviceforms(){
		$this->load->view('serviceform.php');
	}

	public function customers(){
		$this->load->view('customer.php');
	}

	public function billing(){
		$this->load->view('billing.php');
	}
}
