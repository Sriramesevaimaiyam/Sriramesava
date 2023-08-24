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
        $this->load->model('userModel');
		$this->load->library('session');
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
            // $_session['userId'] = $authentication[0]['id'];
            // $_session['userName'] = $authentication[0]['userName'];
            // $_session['mobile']= $authentication[0]['mobileNumber'];
            $userLoggedIn = array(
                'userId' => $authentication[0]['id'],
                'userName' => $authentication[0]['userName'],
                'mobile' => $authentication[0]['mobileNumber']
            );
			$this->session->set_userdata($userLoggedIn);
            $this->customer();
        }
        else{
            $this->load->view('login.php');
        }
    }

	public function customer(){
		
		$customerData = $this->customerModel->customerData();
		$this->data['customerData'] = $customerData;
		$this->load->view('customer.php', $this->data);
	}

	public function searchresult(){
		$postData = $this->input->post(null, true);

        $customerList = $this->customerModel->getCustomerList($postData['search']);
		$this->data['customerList'] = $customerList;
		$this->load->view('customer_search.php', $this->data);
	}

	public function createCustomer(){
		$postData = $this->input->post(null, true);
		// $customerData = $this->customerModel->customerData();
        $customerList = $this->customerModel->createCustomer();
		$this->customer();
	}

	public function editCustomer(){
		$customerId = $this->uri->segment(4);
		$customer = $this->customerModel->getCustomerById($customerId);
		$this->data['customer'] = $customer;
		$this->load->view('updateCustomer.php' , $this->data);
	}

	public function update(){
		$postData = $this->input->post(null, true);
		$customerId = $postData['id'];
		$customer = $this->customerModel->updateCustomer($customerId);
		$this->customer();
	}

	public function delete(){
		$customerId = $this->uri->segment(4);
		$postData = $this->input->post(null, true);
		$customer = $this->customerModel->deleteCustomer($customerId);
		$this->customer();
	}

	public function billing(){
		$this->load->view('billing.php');
	}
}
