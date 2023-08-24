<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class billing extends CI_Controller {

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
		$this->load->library('session');
        // if ($this->Utilities->checkUserLogged()) {
        //     $userLoggedIn = $this->session->get_userdata('vendorLoggedIn');
        //     $this->data['vendorLoggedIn'] = $userLoggedIn['vendorLoggedIn'];
        // }
    }

	public function index()
	{
		$billingData = $this->billingModel->getBillingData();
		$this->data['billingData'] = $billingData;
		$this->load->view('billing.php', $this->data);
	}

    public function addNewService(){
        $customerId = $this->uri->segment(4);
		$customer = $this->customerModel->getCustomerById($customerId);
		$this->data['customer'] = $customer;
        $this->load->view('addService.php', $this->data);
    }

    public function createService(){
        $postData = $this->input->post(null,true);
        $createservice = $this->billingModel->AddNewService();
		$this->index();
    }

	
}
