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
	 */
	public function index()
	{
		$this->load->view('dashboard.php');
	}

	public function createCustomer(){
		$this->load->view('services.php');
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