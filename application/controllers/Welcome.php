<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header',['title'=>'Είσοδος χρήστη']);
		$this->load->view('title',['title'=>'Είσοδος χρήστη']);
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function file_form()
	{
		$this->load->view('header',['title'=>'Καταχώριση αρχείου προς ασφάλιση','javascripts'=>['assets/path.js']]);
		$this->load->view('title',['title'=>'Καταχώριση αρχείου προς ασφάλιση']);
		$this->load->view('file_form');
		$this->load->view('footer');
	}

}
